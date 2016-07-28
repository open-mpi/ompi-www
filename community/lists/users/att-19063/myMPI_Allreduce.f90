subroutine myMPI_Allreduce(sendbuf, recvbuf, cnt, datatype, op, comm, mpierr)
implicit none
include 'mpif.h'
double precision :: sendbuf(*), recvbuf(*)
integer, parameter :: k8 = selected_int_kind(18)
integer (kind=k8) :: cnt
integer :: datatype, op, comm, mpierr
integer, parameter :: maxallreduce = 134217728
integer :: nallreduce, iallreduce, length, idx
logical :: inplace

   if (cnt <= maxallreduce) then
      call MPI_Allreduce(sendbuf, recvbuf, cnt, datatype, op, comm, mpierr)
   else
      nallreduce = cnt/maxallreduce
      if (nallreduce*maxallreduce /= cnt) then
         nallreduce = nallreduce + 1
         length = cnt/nallreduce
         if (length*nallreduce /= cnt) then
            length = length + 1
         end if
      else
         length = maxallreduce
      end if
      inplace = sendbuf(1) == MPI_IN_PLACE
      if (inplace) then
         do iallreduce = 1, nallreduce - 1
            idx = (iallreduce - 1)*length + 1
            call MPI_Allreduce(MPI_IN_PLACE, recvbuf(idx), length, &
                               datatype, op, comm, mpierr)
            if (mpierr /= MPI_SUCCESS) return
         end do
      else
         do iallreduce = 1, nallreduce - 1
            idx = (iallreduce - 1)*length + 1
            call MPI_Allreduce(sendbuf(idx), recvbuf(idx), length, &
                               datatype, op, comm, mpierr)
            if (mpierr /= MPI_SUCCESS) return
         end do
      end if
      idx = (nallreduce - 1)*length + 1
      length = cnt - idx + 1
      if (inplace) then
         call MPI_Allreduce(MPI_IN_PLACE, recvbuf(idx), length, &
                            datatype, op, comm, mpierr)
      else
         call MPI_Allreduce(sendbuf(idx), recvbuf(idx), length, &
                            datatype, op, comm, mpierr)
      end if
   end if
   return
end

