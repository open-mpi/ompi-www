
      program ng

      implicit none

      external Nsum, Gsum

      double precision Nsum, Gsum, integrate, ee, resn, resg, n, g, s1

      double precision H, theta, phi, BG, thetaM, phiM, kBT, EF
      common / intparms / H, theta, phi, BG, thetaM, phiM, kBT, EF

      double precision ialpha, hbar, c, e, kB, hartree_eV, hartree_J,
     $     au_T, au_angstrom, T

      parameter ( ialpha = 137.0359991d0, hbar = 1, c = ialpha, e = 1,
     $     kB = 3.1668153d-6,
     $     hartree_eV = 27.2113845d0, hartree_J = 4.35974417d-18,
     $     au_T = 2.35051742d5, au_angstrom = 0.5291772108d0,
     $     T = 10d0 )

      double precision a, b

      double precision pi

      parameter ( pi = 3.141592653589793d0 )


      include 'mpif.h'

      integer ierr, rank, status(MPI_STATUS_SIZE)

      integer cmd(2)
      double precision buf(1), bufx, bufy
      integer nd

      integer size, whatfun
      common / commparms / size, whatfun


      call mpi_init(ierr)

      kBT = kB*T

      H = 2.0d0*c/au_T
      theta = 0d0
      phi = 0d0

      BG = -0.03d0/hartree_eV
      thetaM = 0d0
      phiM = 0d0

      call mpi_comm_rank(MPI_COMM_WORLD, rank, ierr)

      if(rank .ne. 0) then
         
         do while(.true.)
            call mpi_recv(cmd, 2, MPI_INTEGER, 0, 1, MPI_COMM_WORLD,
     $           status, ierr)

            print *, rank, ' received ', cmd(1)

            select case(cmd(1))

            case(1)
               goto 300

            case(2)
               call mpi_recv(buf, 1, MPI_DOUBLE_PRECISION, 0, 2,
     $              MPI_COMM_WORLD, status, ierr)
               EF = buf(1)

            case(3)
               call mpi_recv(bufx, 1, MPI_DOUBLE_PRECISION, 0, 3,
     $              MPI_COMM_WORLD, status, ierr)

               select case(cmd(2))
               case(1)
                  bufy = Nsum(bufx)
               case(2)
                  bufy = Gsum(bufx)
               case default
                  write(*, *) '***   unknown cmd(2)   ***'
                  stop
               end select
                 
               call mpi_send(bufy, 1, MPI_DOUBLE_PRECISION, 0, 3,
     $              MPI_COMM_WORLD, ierr)

            case default
               write(*, *) '***   unknown cmd(1)   ***'
               stop

            end select
              
         end do
300      continue

      else

         call mpi_comm_size(MPI_COMM_WORLD, size, ierr)

         open(12, status='OLD', FILE='in_ef.txt')
         open(13, status='UNKNOWN', FILE='out.txt')

         do while(.true.)

            read(12, *, end=100) ee

            EF = ee/hartree_eV

            do nd = 1, size-1
               cmd(1) = 2
               buf = EF
               call mpi_send(cmd, 2, MPI_INTEGER, nd, 1, MPI_COMM_WORLD,
     $              ierr)
               call mpi_send(buf, 1, MPI_DOUBLE_PRECISION, nd, 2,
     $              MPI_COMM_WORLD, ierr)
            end do


            a = -0.25d0
            b = 0.25d0

            whatfun = 1
            resn = integrate(Nsum, a, b)

            whatfun = 2
            resg = integrate(Gsum, a, b)

            s1 = e*H/(hbar*c) / (2*pi)**2 / (au_angstrom * 1d-8)**3

            n = s1 * resn
            g = (hartree_J * 1d7) * kBT * s1 * resg

            write(13,*) EF, ee, resn, n, resg, g

         end do

 100     close(12)
         close(13)

         cmd(1) = 1
         do nd = 1, size-1
            call mpi_send(cmd, 2, MPI_INTEGER, nd, 1, MPI_COMM_WORLD,
     $           ierr)
         end do

      end if

      call mpi_finalize(ierr)

      end program


      subroutine int_fun(n, x, y)

      implicit none

      integer n
      double precision x(n), y(n)

      include 'mpif.h'

      integer ierr, status(MPI_STATUS_SIZE)

      integer cmd(2)
      logical flag

      integer node_status(size-1), requests(size-1), i, nd, pending

      integer size, whatfun
      common / commparms / size, whatfun


      do nd = 1, size-1
         node_status(nd) = 0
      end do

      pending = 0

      i = 0
      do while(i .lt. n .or. pending .ne. 0)

         if(i .ge. n) goto 600

         do nd = 1, size-1
            if(node_status(nd) .eq. 0) goto 500
         end do
         goto 600

 500     i = i + 1

         print *, 'sending task ', i, ' to ', nd

         cmd(1) = 3
         cmd(2) = whatfun
         call mpi_send(cmd, 2, MPI_INTEGER, nd, 1, MPI_COMM_WORLD, ierr)
         call mpi_send(x(i), 1, MPI_DOUBLE_PRECISION, nd, 3,
     $        MPI_COMM_WORLD, ierr)

         call mpi_irecv(y(i), 1, MPI_DOUBLE_PRECISION, nd, 3,
     $        MPI_COMM_WORLD, requests(nd), ierr)

         node_status(nd) = 1
         pending = pending + 1

         goto 700

 600     call usleep(1000)

         do nd = 1, size-1
            if(node_status(nd) .ne. 0) then
               call mpi_test(requests(nd), flag, status, ierr)
               if(flag) then
                  node_status(nd) = 0
                  pending = pending - 1
               end if
            end if
         end do

 700     continue
      end do

      end subroutine


