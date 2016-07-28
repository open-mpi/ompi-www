<?
$subject_val = "Re: [OMPI users] Problem with mpi_comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  5 15:18:24 2010" -->
<!-- isoreceived="20100505191824" -->
<!-- sent="Wed, 5 May 2010 20:18:16 +0100" -->
<!-- isosent="20100505191816" -->
<!-- name="Andrew J Marquis" -->
<!-- email="a.marquis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with mpi_comm_spawn_multiple" -->
<!-- id="20100505191816.GA11866_at_mefred01.me.ic.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6104D48C-1979-4DE4-837A-4DA11DA84D0C_at_open-mpi.org" -->
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
<strong>From:</strong> Andrew J Marquis (<em>a.marquis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-05 15:18:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12911.php">Ralph Castain: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="12909.php">Ralph Castain: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="12909.php">Ralph Castain: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12911.php">Ralph Castain: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="12911.php">Ralph Castain: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph,
<br>
<p>&nbsp;&nbsp;thanks for that. I have done much the same (as I indicated in my original post). I this case my C-program correctly spawned the slaves and the slaves printed the correctly passed argument lists. On running this and my fortran slave I get:
<br>
<p>&nbsp;nsize, mytid: iargs           2           0 :           1
<br>
&nbsp;spray:   0 1:1 2 3 4             
<br>
<p>&nbsp;nsize, mytid: iargs           2           1 :           1
<br>
&nbsp;spray:   1 1:5 6 7 8             
<br>
<p><p>which is what I expect.
<br>
<p>I still think the error may well be mine rather that ompi's but I am at a loss to see what is going on !!
<br>
<p>Thanks for the help so far,
<br>
<p>Fred Marquis.
<br>
<p><p>c-program
<br>
=========
<br>
#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>int main( int argc, char *argv[] )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int np[2] = { 1, 1 };
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int errcodes[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char *cmds[2] = { &quot;./spray&quot;, &quot;./spray&quot; };
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char *args[2] = { &quot;1 2 3 4&quot;, &quot;5 6 7 8&quot; };
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char **array_of_argv[2]; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *argv0[] = {&quot;1 2 3 4&quot;, (char *)0}; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *argv1[] = {&quot;5 6 7 8&quot;, (char *)0}; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_argv[0] = argv0; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array_of_argv[1] = argv1; 
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm parentcomm, intercomm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info infos[2] = { MPI_INFO_NULL, MPI_INFO_NULL };
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_spawn_multiple( 2, cmds, array_of_argv, np, infos, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0, MPI_COMM_WORLD, &amp;intercomm, errcodes );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>On Wed, May 05, 2010 at 07:47:20PM +0100, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I think OMPI is okay - here is a C sample program and the associated output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 3 ./spawn_multiple
</span><br>
<span class="quotelev1">&gt; Parent [pid 98895] about to spawn!
</span><br>
<span class="quotelev1">&gt; Parent [pid 98896] about to spawn!
</span><br>
<span class="quotelev1">&gt; Parent [pid 98897] about to spawn!
</span><br>
<span class="quotelev1">&gt; Parent done with spawn
</span><br>
<span class="quotelev1">&gt; Parent sending message to children
</span><br>
<span class="quotelev1">&gt; Parent done with spawn
</span><br>
<span class="quotelev1">&gt; Parent done with spawn
</span><br>
<span class="quotelev1">&gt; Hello from the child 0 of 2 on host Ralph pid 98898: argv[1] = foo
</span><br>
<span class="quotelev1">&gt; Child 0 received msg: 38
</span><br>
<span class="quotelev1">&gt; Hello from the child 1 of 2 on host Ralph pid 98899: argv[1] = bar
</span><br>
<span class="quotelev1">&gt; Parent disconnected
</span><br>
<span class="quotelev1">&gt; Parent disconnected
</span><br>
<span class="quotelev1">&gt; Child 1 disconnected
</span><br>
<span class="quotelev1">&gt; Child 0 disconnected
</span><br>
<span class="quotelev1">&gt; Parent disconnected
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 5, 2010, at 12:08 PM, Fred Marquis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  I am using mpi_comm_spawn_multiple to spawn multiple commands with argument lists. I am trying to do this in fortran (77) using version openmpi-1.4.1 and the ifort compiler v9.0. The operating system is SuSE Linux 10.1 (x86-64).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have put together a simple controlling example program (test_pbload.F) and an example slave program (spray.F) to try and explain my problem.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In the controlling program mpi_comm_spawn_multiple is used to set 2 copies of the slave running. The first is started with the argument list &quot;1 2 3 4&quot; and the second with &quot;5 6 7 8&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The slaves are started OK and the slaves print out the argument lists and exit. In addition the slaves print out their rank numbers so I can see which argument list belongs to which slave.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What I am finding is that the argument lists are not being sent to the slaves correctly, indeed both slaves seem to be getting both arguments lists !!!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; To compile and run the programs I follow the steps below.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Controlling program &quot;test_pbload.F&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   mpif77 -o test_pbload test_pbload.F
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Slave program &quot;spray.F&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   mpif77 -o spray spray.F
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Run the controller
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   mpirun -np 1 test_pbload
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The output of which is from the first slave:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; nsize, mytid: iargs           2           0 :           2
</span><br>
<span class="quotelev2">&gt; &gt; spray:   0 1:1 2 3 4   &lt; FIRST ARGUMENT           
</span><br>
<span class="quotelev2">&gt; &gt; spray:   0 2:4 5 6 7   &lt; SECOND ARGUMENT             
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; and the second slave:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; nsize, mytid: iargs           2           1 :           2
</span><br>
<span class="quotelev2">&gt; &gt; spray:   1 1:1 2 3 4   &lt; FIRST ARGUMENT             
</span><br>
<span class="quotelev2">&gt; &gt; spray:   1 2:4 5 6 7   &lt; SECOND ARGUMENT  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In each case the arguments (2 in both cases) are the same.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have written a C version of the controlling program and everthing works as expected so I presume that I have either got the specification of the argument list wrong or I have discovered an error/bug. At the moment I working on the former -- but am at a loss to see what is wrong !!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any help, pointers etc really appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Controlling program (that uses MPI_COMM_SPAWN_MULTIPLE) test_pbload.F
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      program main
</span><br>
<span class="quotelev2">&gt; &gt; c
</span><br>
<span class="quotelev2">&gt; &gt;      implicit none
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpif.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      integer error
</span><br>
<span class="quotelev2">&gt; &gt;      integer intercomm
</span><br>
<span class="quotelev2">&gt; &gt;      CHARACTER*25 commands(2), argvs(2, 2) 
</span><br>
<span class="quotelev2">&gt; &gt;      integer nprocs(2),info(2),ncpus
</span><br>
<span class="quotelev2">&gt; &gt; c
</span><br>
<span class="quotelev2">&gt; &gt;      call mpi_init(error)
</span><br>
<span class="quotelev2">&gt; &gt; c
</span><br>
<span class="quotelev2">&gt; &gt;       ncpus = 2
</span><br>
<span class="quotelev2">&gt; &gt; c
</span><br>
<span class="quotelev2">&gt; &gt;       commands(1) = ' ./spray ' 
</span><br>
<span class="quotelev2">&gt; &gt;       nprocs(1) = 1
</span><br>
<span class="quotelev2">&gt; &gt;       info(1) = MPI_INFO_NULL
</span><br>
<span class="quotelev2">&gt; &gt;       argvs(1, 1) = ' 1 2 3 4 '
</span><br>
<span class="quotelev2">&gt; &gt;       argvs(1, 2) = ' ' 
</span><br>
<span class="quotelev2">&gt; &gt; c
</span><br>
<span class="quotelev2">&gt; &gt;       commands(2) = ' ./spray ' 
</span><br>
<span class="quotelev2">&gt; &gt;       nprocs(2) = 1
</span><br>
<span class="quotelev2">&gt; &gt;       info(2) = MPI_INFO_NULL
</span><br>
<span class="quotelev2">&gt; &gt;       argvs(2, 1) = ' 4 5 6 7 ' 
</span><br>
<span class="quotelev2">&gt; &gt;       argvs(2, 2) = ' ' 
</span><br>
<span class="quotelev2">&gt; &gt; c
</span><br>
<span class="quotelev2">&gt; &gt;      call mpi_comm_spawn_multiple( ncpus,
</span><br>
<span class="quotelev2">&gt; &gt;     1      commands, argvs, nprocs, info,
</span><br>
<span class="quotelev2">&gt; &gt;     2      0, MPI_COMM_WORLD, intercomm, 
</span><br>
<span class="quotelev2">&gt; &gt;     3      MPI_ERRCODES_IGNORE, error )
</span><br>
<span class="quotelev2">&gt; &gt; c
</span><br>
<span class="quotelev2">&gt; &gt;      call mpi_finalize(error)
</span><br>
<span class="quotelev2">&gt; &gt; c
</span><br>
<span class="quotelev2">&gt; &gt;      end
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Slave program (started by the controlling program) spray.F
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      program main
</span><br>
<span class="quotelev2">&gt; &gt;      integer error
</span><br>
<span class="quotelev2">&gt; &gt;      integer pid
</span><br>
<span class="quotelev2">&gt; &gt;      character*20 line(100)
</span><br>
<span class="quotelev2">&gt; &gt;      call mpi_init(error)
</span><br>
<span class="quotelev2">&gt; &gt; c
</span><br>
<span class="quotelev2">&gt; &gt;      CALL MPI_COMM_SIZE(MPI_COMM_WORLD,NSIZE,error)
</span><br>
<span class="quotelev2">&gt; &gt;      CALL MPI_COMM_RANK(MPI_COMM_WORLD,MYTID,error)
</span><br>
<span class="quotelev2">&gt; &gt; c
</span><br>
<span class="quotelev2">&gt; &gt;      iargs=iargc()
</span><br>
<span class="quotelev2">&gt; &gt;      write(*,*) 'nsize, mytid: iargs', nsize, mytid, &quot;:&quot;, iargs
</span><br>
<span class="quotelev2">&gt; &gt; c
</span><br>
<span class="quotelev2">&gt; &gt;      if( iargs.gt.0 ) then
</span><br>
<span class="quotelev2">&gt; &gt;         do i = 1, iargs
</span><br>
<span class="quotelev2">&gt; &gt;            call getarg(i,line(i))
</span><br>
<span class="quotelev2">&gt; &gt;            write(*,'(1x,a,i3,20(i2,1h:,a))') 
</span><br>
<span class="quotelev2">&gt; &gt;     1       'spray: ',mytid,i,line(i)
</span><br>
<span class="quotelev2">&gt; &gt;         enddo
</span><br>
<span class="quotelev2">&gt; &gt;      endif
</span><br>
<span class="quotelev2">&gt; &gt; c
</span><br>
<span class="quotelev2">&gt; &gt;      call mpi_finalize(error)
</span><br>
<span class="quotelev2">&gt; &gt; c
</span><br>
<span class="quotelev2">&gt; &gt;      end
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
   ----------------------------------------------------------
   Dr. A.J. Marquis       Tel:      +44 (0)20 7594 7040
   Dept. of Mech. Eng.    Fax:      +44 (0)20 7594 1472
   Imperial College
   Exhibition Road        E-Mail:   a.marquis_at_[hidden]
   London   SW7 2AZ
   BOFH: Maintence window broken
   All views expressed are my own !
   ----------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12911.php">Ralph Castain: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="12909.php">Ralph Castain: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="12909.php">Ralph Castain: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12911.php">Ralph Castain: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="12911.php">Ralph Castain: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
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
