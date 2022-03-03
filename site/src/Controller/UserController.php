<?php

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as SWG;

class UserController
{
    /**
     * @Route("/api/1.0/add", name="add_user", methods={"post"})
     * @SWG\Response(
     *     response=200,
     *     description="Successfully add user",
     * )
     *
     * @SWG\Parameter(
     *     name="firstName",
     *     in="body",
     *     required=true,
     *     @SWG\Schema(type="string")
     * )
     * @SWG\Parameter(
     *     name="lastName",
     *     in="body",
     *     required=true,
     *     @SWG\Schema(type="string")
     * )
     * @SWG\Parameter(
     *     name="email",
     *     in="body",
     *     required=true,
     *     @SWG\Schema(type="string")
     * )
     * @SWG\Parameter(
     *     name="phone",
     *     in="body",
     *     required=true,
     *     @SWG\Schema(type="string")
     * )
     *
     * @param Request $request
     * @return JsonResponse
     * @throws JsonException
     */
    public function addUser(Request $request)
    {
        //$json = json_decode($this->request->getCurrentRequest()->getContent());
        $data = json_decode($request->getContent(), false, 512, JSON_THROW_ON_ERROR);


        return new JsonResponse(['success' => true], 200);
    }
}