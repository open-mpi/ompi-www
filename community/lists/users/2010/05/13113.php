<?
$subject_val = "Re: [OMPI users] Allgather in inter-communicator bug,";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 20 13:44:06 2010" -->
<!-- isoreceived="20100520174406" -->
<!-- sent="Thu, 20 May 2010 13:44:01 -0400" -->
<!-- isosent="20100520174401" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Allgather in inter-communicator bug," -->
<!-- id="1BFB9B48-00B2-4B82-BE0D-15AB3DDA8919_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BF57270.4000702_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Allgather in inter-communicator bug,<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-20 13:44:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13114.php">Lisandro Dalcin: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Previous message:</strong> <a href="13112.php">Edgar Gabriel: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>In reply to:</strong> <a href="13112.php">Edgar Gabriel: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13114.php">Lisandro Dalcin: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Filed as <a href="https://svn.open-mpi.org/trac/ompi/ticket/2415">https://svn.open-mpi.org/trac/ompi/ticket/2415</a>.
<br>
<p>Thanks for the bug report!
<br>
<p><p>On May 20, 2010, at 1:33 PM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; thanks for pointing the problem out. I checked in the code, the problem
</span><br>
<span class="quotelev1">&gt; is the MPI layer itself. The following check prevents us from doing
</span><br>
<span class="quotelev1">&gt; anything
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; e.g. ompi/mpi/c/allgather.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if ((MPI_IN_PLACE != sendbuf &amp;&amp; 0 == sendcount) ||
</span><br>
<span class="quotelev1">&gt;         (0 == recvcount)) {
</span><br>
<span class="quotelev1">&gt;         return MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so the problem is not in the modules/algorithms but in the API layer,
</span><br>
<span class="quotelev1">&gt; which did not encounter for intercommunicators correctly. I'll try to
</span><br>
<span class="quotelev1">&gt; fix it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 05/20/2010 10:48 AM, Battalgazi YILDIRIM wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; you are right, I should have provided C++ and Fortran example, so I am
</span><br>
<span class="quotelev2">&gt; &gt; doing now
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is &quot;cplusplus.cpp&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt; &gt; using namespace std;
</span><br>
<span class="quotelev2">&gt; &gt; int main()
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     MPI::Init();
</span><br>
<span class="quotelev2">&gt; &gt;     char command[] = &quot;./a.out&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI::Info info;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI::Intercomm child = MPI::COMM_WORLD.Spawn(command, NULL, 8,info, 0);
</span><br>
<span class="quotelev2">&gt; &gt;     int a[8]={0,0,0,0,0,0,0,0};
</span><br>
<span class="quotelev2">&gt; &gt;     int dummy;
</span><br>
<span class="quotelev2">&gt; &gt;     child.Allgather(&amp;dummy, 0, MPI::INT, a, 1, MPI::INT);
</span><br>
<span class="quotelev2">&gt; &gt;     child.Disconnect();
</span><br>
<span class="quotelev2">&gt; &gt;     cout &lt;&lt; &quot;a[&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;     for ( int i = 0; i &lt; 7; i++ )
</span><br>
<span class="quotelev2">&gt; &gt;         cout &lt;&lt; a[i] &lt;&lt; &quot;,&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;     cout &lt;&lt; a[7] &lt;&lt; &quot;]&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI::Finalize();
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is again &quot;fortran.f90&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; program main
</span><br>
<span class="quotelev2">&gt; &gt;  use mpi
</span><br>
<span class="quotelev2">&gt; &gt;  implicit none
</span><br>
<span class="quotelev2">&gt; &gt;  integer :: parent, rank, val, dummy, ierr
</span><br>
<span class="quotelev2">&gt; &gt;  call MPI_Init(ierr)
</span><br>
<span class="quotelev2">&gt; &gt;  call MPI_Comm_get_parent(parent, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;  call MPI_Comm_rank(parent, rank, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;  val = rank + 1
</span><br>
<span class="quotelev2">&gt; &gt;  call MPI_Allgather(val,   1, MPI_INTEGER, &amp;
</span><br>
<span class="quotelev2">&gt; &gt;                     dummy, 0, MPI_INTEGER, &amp;
</span><br>
<span class="quotelev2">&gt; &gt;                     parent, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;  call MPI_Comm_disconnect(parent, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;  call MPI_Finalize(ierr)
</span><br>
<span class="quotelev2">&gt; &gt; end program main
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; here is how you build and run
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -bash-3.2$ mpif90 fortran.f90
</span><br>
<span class="quotelev2">&gt; &gt; -bash-3.2$ mpiCC -o parent cplusplus.cpp
</span><br>
<span class="quotelev2">&gt; &gt; -bash-3.2$ ./parent
</span><br>
<span class="quotelev2">&gt; &gt; a[0,0,0,0,0,0,0,0]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I use mpich2,
</span><br>
<span class="quotelev2">&gt; &gt; -bash-3.2$ mpif90 fortran.f90
</span><br>
<span class="quotelev2">&gt; &gt; -bash-3.2$ mpiCC -o parent cplusplus.cpp
</span><br>
<span class="quotelev2">&gt; &gt; -bash-3.2$ ./parent
</span><br>
<span class="quotelev2">&gt; &gt; a[1,2,3,4,5,6,7,8]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hope that you can repeat this problem to see problem with OPENMPI,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, May 20, 2010 at 10:09 AM, Jeff Squyres &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Can you send us an all-C or all-Fortran example that shows the problem?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     We don't have easy access to test through the python bindings.
</span><br>
<span class="quotelev2">&gt; &gt;      ...ok, I admit it, it's laziness on my part.  :-)  But having a
</span><br>
<span class="quotelev2">&gt; &gt;     pure Open MPI test app would also remove some possible variables and
</span><br>
<span class="quotelev2">&gt; &gt;     possible sources of error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     On May 20, 2010, at 9:43 AM, Battalgazi YILDIRIM wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; Hi Jody,
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; I think that it is correct, you can  test this example in your
</span><br>
<span class="quotelev2">&gt; &gt;     desktop,
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; thanks,
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; On Thu, May 20, 2010 at 3:18 AM, jody &lt;jody.xha_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;     &lt;mailto:jody.xha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; Hi
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; I am really no python expert, but it looks to me as if you were
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; gathering arrays filled with zeroes:
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;  a = array('i', [0]) * n
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; Shouldn't this line be
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;  a = array('i', [r])*n
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; where r is the rank of the process?
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; Jody
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; On Thu, May 20, 2010 at 12:00 AM, Battalgazi YILDIRIM
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; &lt;yildirimga_at_[hidden] &lt;mailto:yildirimga_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; I am trying to use intercommunicator ::Allgather between two
</span><br>
<span class="quotelev2">&gt; &gt;     child process.
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; I have fortran and Python code,
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; I am using mpi4py for python. It seems that ::Allgather is not
</span><br>
<span class="quotelev2">&gt; &gt;     working
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; properly in my desktop.
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;  I have contacted first mpi4py developers (Lisandro Dalcin), he
</span><br>
<span class="quotelev2">&gt; &gt;     simplified
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; my problem and provided two example files (python.py and
</span><br>
<span class="quotelev2">&gt; &gt;     fortran.f90,
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; please see below).
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; We tried with different MPI vendors, the following example
</span><br>
<span class="quotelev2">&gt; &gt;     worked correclty(
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; it means the final print out should be array('i', [1, 2, 3, 4,
</span><br>
<span class="quotelev2">&gt; &gt;     5, 6, 7, 8])
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; )
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; However, it is not giving correct answer in my two desktop
</span><br>
<span class="quotelev2">&gt; &gt;     (Redhat and
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; ubuntu) both
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; using OPENMPI
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; Could yo look at this problem please?
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; If you want to follow our discussion before you, you can go to
</span><br>
<span class="quotelev2">&gt; &gt;     following
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; link:
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://groups.google.com/group/mpi4py/browse_thread/thread/c17c660ae56ff97e">http://groups.google.com/group/mpi4py/browse_thread/thread/c17c660ae56ff97e</a>
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; yildirim_at_memosa:~/python_intercomm$ more python.py
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; from mpi4py import MPI
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; from array import array
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; import os
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; progr = os.path.abspath('a.out')
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; child = MPI.COMM_WORLD.Spawn(progr,[], 8)
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; n = child.remote_size
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; a = array('i', [0]) * n
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; child.Allgather([None,MPI.INT &lt;<a href="http://MPI.INT">http://MPI.INT</a>&gt;],[a,MPI.INT
</span><br>
<span class="quotelev2">&gt; &gt;     &lt;<a href="http://MPI.INT">http://MPI.INT</a>&gt;])
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; child.Disconnect()
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; print a
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; yildirim_at_memosa:~/python_intercomm$ more fortran.f90
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; program main
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;  use mpi
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;  implicit none
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;  integer :: parent, rank, val, dummy, ierr
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;  call MPI_Init(ierr)
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;  call MPI_Comm_get_parent(parent, ierr)
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;  call MPI_Comm_rank(parent, rank, ierr)
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;  val = rank + 1
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;  call MPI_Allgather(val,   1, MPI_INTEGER, &amp;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;                     dummy, 0, MPI_INTEGER, &amp;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;                     parent, ierr)
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;  call MPI_Comm_disconnect(parent, ierr)
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;  call MPI_Finalize(ierr)
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; end program main
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; yildirim_at_memosa:~/python_intercomm$ mpif90 fortran.f90
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; yildirim_at_memosa:~/python_intercomm$ python python.py
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; array('i', [0, 0, 0, 0, 0, 0, 0, 0])
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; B. Gazi YILDIRIM
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; --
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; B. Gazi YILDIRIM
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     --
</span><br>
<span class="quotelev2">&gt; &gt;     Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt;     jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;     users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; B. Gazi YILDIRIM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;signature.asc&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13114.php">Lisandro Dalcin: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Previous message:</strong> <a href="13112.php">Edgar Gabriel: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>In reply to:</strong> <a href="13112.php">Edgar Gabriel: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13114.php">Lisandro Dalcin: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
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
