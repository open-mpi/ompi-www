<?
$subject_val = "Re: [OMPI users] Problem with mpi_comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  5 15:41:49 2010" -->
<!-- isoreceived="20100505194149" -->
<!-- sent="Wed, 5 May 2010 13:41:42 -0600" -->
<!-- isosent="20100505194142" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with mpi_comm_spawn_multiple" -->
<!-- id="B2A8BCCA-F8DC-4F30-952A-1DD5D56FCE84_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100505191816.GA11866_at_mefred01.me.ic.ac.uk" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] Problem with mpi_comm_spawn_multiple<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-05 15:41:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12912.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12910.php">Andrew J Marquis: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="12910.php">Andrew J Marquis: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12977.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, missed that - afraid I no speakee fortran any more (thankfully got to remove that module from my brain 20+ years ago).
<br>
<p>On May 5, 2010, at 1:18 PM, Andrew J Marquis wrote:
<br>
<p><span class="quotelev1">&gt; Dear Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  thanks for that. I have done much the same (as I indicated in my original post). I this case my C-program correctly spawned the slaves and the slaves printed the correctly passed argument lists. On running this and my fortran slave I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nsize, mytid: iargs           2           0 :           1
</span><br>
<span class="quotelev1">&gt; spray:   0 1:1 2 3 4             
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nsize, mytid: iargs           2           1 :           1
</span><br>
<span class="quotelev1">&gt; spray:   1 1:5 6 7 8             
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which is what I expect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I still think the error may well be mine rather that ompi's but I am at a loss to see what is going on !!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the help so far,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fred Marquis.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; c-program
</span><br>
<span class="quotelev1">&gt; =========
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main( int argc, char *argv[] )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int np[2] = { 1, 1 };
</span><br>
<span class="quotelev1">&gt;    int errcodes[2];
</span><br>
<span class="quotelev1">&gt;    char *cmds[2] = { &quot;./spray&quot;, &quot;./spray&quot; };
</span><br>
<span class="quotelev1">&gt;    char *args[2] = { &quot;1 2 3 4&quot;, &quot;5 6 7 8&quot; };
</span><br>
<span class="quotelev1">&gt;    char **array_of_argv[2]; 
</span><br>
<span class="quotelev1">&gt;       char *argv0[] = {&quot;1 2 3 4&quot;, (char *)0}; 
</span><br>
<span class="quotelev1">&gt;       char *argv1[] = {&quot;5 6 7 8&quot;, (char *)0}; 
</span><br>
<span class="quotelev1">&gt;       array_of_argv[0] = argv0; 
</span><br>
<span class="quotelev1">&gt;       array_of_argv[1] = argv1; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Comm parentcomm, intercomm;
</span><br>
<span class="quotelev1">&gt;    MPI_Info infos[2] = { MPI_INFO_NULL, MPI_INFO_NULL };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_spawn_multiple( 2, cmds, array_of_argv, np, infos, 
</span><br>
<span class="quotelev1">&gt;                             0, MPI_COMM_WORLD, &amp;intercomm, errcodes );
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, May 05, 2010 at 07:47:20PM +0100, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think OMPI is okay - here is a C sample program and the associated output:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 3 ./spawn_multiple
</span><br>
<span class="quotelev2">&gt;&gt; Parent [pid 98895] about to spawn!
</span><br>
<span class="quotelev2">&gt;&gt; Parent [pid 98896] about to spawn!
</span><br>
<span class="quotelev2">&gt;&gt; Parent [pid 98897] about to spawn!
</span><br>
<span class="quotelev2">&gt;&gt; Parent done with spawn
</span><br>
<span class="quotelev2">&gt;&gt; Parent sending message to children
</span><br>
<span class="quotelev2">&gt;&gt; Parent done with spawn
</span><br>
<span class="quotelev2">&gt;&gt; Parent done with spawn
</span><br>
<span class="quotelev2">&gt;&gt; Hello from the child 0 of 2 on host Ralph pid 98898: argv[1] = foo
</span><br>
<span class="quotelev2">&gt;&gt; Child 0 received msg: 38
</span><br>
<span class="quotelev2">&gt;&gt; Hello from the child 1 of 2 on host Ralph pid 98899: argv[1] = bar
</span><br>
<span class="quotelev2">&gt;&gt; Parent disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Parent disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Child 1 disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Child 0 disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Parent disconnected
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 5, 2010, at 12:08 PM, Fred Marquis wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using mpi_comm_spawn_multiple to spawn multiple commands with argument lists. I am trying to do this in fortran (77) using version openmpi-1.4.1 and the ifort compiler v9.0. The operating system is SuSE Linux 10.1 (x86-64).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have put together a simple controlling example program (test_pbload.F) and an example slave program (spray.F) to try and explain my problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the controlling program mpi_comm_spawn_multiple is used to set 2 copies of the slave running. The first is started with the argument list &quot;1 2 3 4&quot; and the second with &quot;5 6 7 8&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The slaves are started OK and the slaves print out the argument lists and exit. In addition the slaves print out their rank numbers so I can see which argument list belongs to which slave.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I am finding is that the argument lists are not being sent to the slaves correctly, indeed both slaves seem to be getting both arguments lists !!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To compile and run the programs I follow the steps below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Controlling program &quot;test_pbload.F&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpif77 -o test_pbload test_pbload.F
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Slave program &quot;spray.F&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpif77 -o spray spray.F
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Run the controller
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpirun -np 1 test_pbload
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The output of which is from the first slave:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nsize, mytid: iargs           2           0 :           2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spray:   0 1:1 2 3 4   &lt; FIRST ARGUMENT           
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spray:   0 2:4 5 6 7   &lt; SECOND ARGUMENT             
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the second slave:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nsize, mytid: iargs           2           1 :           2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spray:   1 1:1 2 3 4   &lt; FIRST ARGUMENT             
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spray:   1 2:4 5 6 7   &lt; SECOND ARGUMENT  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In each case the arguments (2 in both cases) are the same.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have written a C version of the controlling program and everthing works as expected so I presume that I have either got the specification of the argument list wrong or I have discovered an error/bug. At the moment I working on the former -- but am at a loss to see what is wrong !!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help, pointers etc really appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Controlling program (that uses MPI_COMM_SPAWN_MULTIPLE) test_pbload.F
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     program main
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     implicit none
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpif.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     integer error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     integer intercomm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CHARACTER*25 commands(2), argvs(2, 2) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     integer nprocs(2),info(2),ncpus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     call mpi_init(error)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ncpus = 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      commands(1) = ' ./spray ' 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      nprocs(1) = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      info(1) = MPI_INFO_NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      argvs(1, 1) = ' 1 2 3 4 '
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      argvs(1, 2) = ' ' 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      commands(2) = ' ./spray ' 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      nprocs(2) = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      info(2) = MPI_INFO_NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      argvs(2, 1) = ' 4 5 6 7 ' 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      argvs(2, 2) = ' ' 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     call mpi_comm_spawn_multiple( ncpus,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1      commands, argvs, nprocs, info,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    2      0, MPI_COMM_WORLD, intercomm, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    3      MPI_ERRCODES_IGNORE, error )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     call mpi_finalize(error)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     end
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Slave program (started by the controlling program) spray.F
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     program main
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     integer error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     integer pid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     character*20 line(100)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     call mpi_init(error)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CALL MPI_COMM_SIZE(MPI_COMM_WORLD,NSIZE,error)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     CALL MPI_COMM_RANK(MPI_COMM_WORLD,MYTID,error)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     iargs=iargc()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     write(*,*) 'nsize, mytid: iargs', nsize, mytid, &quot;:&quot;, iargs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if( iargs.gt.0 ) then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        do i = 1, iargs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           call getarg(i,line(i))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           write(*,'(1x,a,i3,20(i2,1h:,a))') 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1       'spray: ',mytid,i,line(i)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        enddo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     call mpi_finalize(error)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     end
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;   ----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   Dr. A.J. Marquis       Tel:      +44 (0)20 7594 7040
</span><br>
<span class="quotelev1">&gt;   Dept. of Mech. Eng.    Fax:      +44 (0)20 7594 1472
</span><br>
<span class="quotelev1">&gt;   Imperial College
</span><br>
<span class="quotelev1">&gt;   Exhibition Road        E-Mail:   a.marquis_at_[hidden]
</span><br>
<span class="quotelev1">&gt;   London   SW7 2AZ
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   BOFH: Maintence window broken
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   All views expressed are my own !
</span><br>
<span class="quotelev1">&gt;   ----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12912.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12910.php">Andrew J Marquis: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="12910.php">Andrew J Marquis: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12977.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
