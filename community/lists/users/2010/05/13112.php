<?
$subject_val = "Re: [OMPI users] Allgather in inter-communicator bug,";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 20 13:33:44 2010" -->
<!-- isoreceived="20100520173344" -->
<!-- sent="Thu, 20 May 2010 12:33:36 -0500" -->
<!-- isosent="20100520173336" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Allgather in inter-communicator bug," -->
<!-- id="4BF57270.4000702_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimiFfW5VY_atX6c9bfb-mCGCMmKbQNdKlqWk80V_at_mail.gmail.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-20 13:33:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13113.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Previous message:</strong> <a href="13111.php">Olivier Riff: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>In reply to:</strong> <a href="13109.php">Battalgazi YILDIRIM: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13113.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Reply:</strong> <a href="13113.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks for pointing the problem out. I checked in the code, the problem
<br>
is the MPI layer itself. The following check prevents us from doing
<br>
anything
<br>
<p><pre>
----
e.g. ompi/mpi/c/allgather.c
   if ((MPI_IN_PLACE != sendbuf &amp;&amp; 0 == sendcount) ||
        (0 == recvcount)) {
        return MPI_SUCCESS;
    }
----
so the problem is not in the modules/algorithms but in the API layer,
which did not encounter for intercommunicators correctly. I'll try to
fix it.
Thanks
edgar
On 05/20/2010 10:48 AM, Battalgazi YILDIRIM wrote:
&gt; Hi,
&gt; 
&gt; you are right, I should have provided C++ and Fortran example, so I am
&gt; doing now
&gt; 
&gt; 
&gt; Here is &quot;cplusplus.cpp&quot;
&gt; 
&gt; #include &lt;mpi.h&gt;
&gt; #include &lt;iostream&gt;
&gt; using namespace std;
&gt; int main()
&gt; {
&gt;     MPI::Init();
&gt;     char command[] = &quot;./a.out&quot;;
&gt;     MPI::Info info;
&gt;     MPI::Intercomm child = MPI::COMM_WORLD.Spawn(command, NULL, 8,info, 0);
&gt;     int a[8]={0,0,0,0,0,0,0,0};
&gt;     int dummy;
&gt;     child.Allgather(&amp;dummy, 0, MPI::INT, a, 1, MPI::INT);
&gt;     child.Disconnect();
&gt;     cout &lt;&lt; &quot;a[&quot;;
&gt;     for ( int i = 0; i &lt; 7; i++ )
&gt;         cout &lt;&lt; a[i] &lt;&lt; &quot;,&quot;;
&gt;     cout &lt;&lt; a[7] &lt;&lt; &quot;]&quot; &lt;&lt; endl;
&gt; 
&gt;     MPI::Finalize();
&gt; }
&gt; 
&gt; 
&gt; Here is again &quot;fortran.f90&quot;
&gt; 
&gt; program main
&gt;  use mpi
&gt;  implicit none
&gt;  integer :: parent, rank, val, dummy, ierr
&gt;  call MPI_Init(ierr)
&gt;  call MPI_Comm_get_parent(parent, ierr)
&gt;  call MPI_Comm_rank(parent, rank, ierr)
&gt;  val = rank + 1
&gt;  call MPI_Allgather(val,   1, MPI_INTEGER, &amp;
&gt;                     dummy, 0, MPI_INTEGER, &amp;
&gt;                     parent, ierr)
&gt;  call MPI_Comm_disconnect(parent, ierr)
&gt;  call MPI_Finalize(ierr)
&gt; end program main
&gt; 
&gt; here is how you build and run
&gt; 
&gt; -bash-3.2$ mpif90 fortran.f90
&gt; -bash-3.2$ mpiCC -o parent cplusplus.cpp
&gt; -bash-3.2$ ./parent
&gt; a[0,0,0,0,0,0,0,0]
&gt; 
&gt; 
&gt; 
&gt; If I use mpich2,
&gt; -bash-3.2$ mpif90 fortran.f90
&gt; -bash-3.2$ mpiCC -o parent cplusplus.cpp
&gt; -bash-3.2$ ./parent
&gt; a[1,2,3,4,5,6,7,8]
&gt; 
&gt; I hope that you can repeat this problem to see problem with OPENMPI,
&gt; 
&gt; Thanks,
&gt; 
&gt; 
&gt; On Thu, May 20, 2010 at 10:09 AM, Jeff Squyres &lt;jsquyres_at_[hidden]
&gt; &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
&gt; 
&gt;     Can you send us an all-C or all-Fortran example that shows the problem?
&gt; 
&gt;     We don't have easy access to test through the python bindings.
&gt;      ...ok, I admit it, it's laziness on my part.  :-)  But having a
&gt;     pure Open MPI test app would also remove some possible variables and
&gt;     possible sources of error.
&gt; 
&gt; 
&gt;     On May 20, 2010, at 9:43 AM, Battalgazi YILDIRIM wrote:
&gt; 
&gt;     &gt; Hi Jody,
&gt;     &gt;
&gt;     &gt; I think that it is correct, you can  test this example in your
&gt;     desktop,
&gt;     &gt;
&gt;     &gt; thanks,
&gt;     &gt;
&gt;     &gt; On Thu, May 20, 2010 at 3:18 AM, jody &lt;jody.xha_at_[hidden]
&gt;     &lt;mailto:jody.xha_at_[hidden]&gt;&gt; wrote:
&gt;     &gt; Hi
&gt;     &gt; I am really no python expert, but it looks to me as if you were
&gt;     &gt; gathering arrays filled with zeroes:
&gt;     &gt;  a = array('i', [0]) * n
&gt;     &gt;
&gt;     &gt; Shouldn't this line be
&gt;     &gt;  a = array('i', [r])*n
&gt;     &gt; where r is the rank of the process?
&gt;     &gt;
&gt;     &gt; Jody
&gt;     &gt;
&gt;     &gt;
&gt;     &gt; On Thu, May 20, 2010 at 12:00 AM, Battalgazi YILDIRIM
&gt;     &gt; &lt;yildirimga_at_[hidden] &lt;mailto:yildirimga_at_[hidden]&gt;&gt; wrote:
&gt;     &gt; &gt; Hi,
&gt;     &gt; &gt;
&gt;     &gt; &gt;
&gt;     &gt; &gt; I am trying to use intercommunicator ::Allgather between two
&gt;     child process.
&gt;     &gt; &gt; I have fortran and Python code,
&gt;     &gt; &gt; I am using mpi4py for python. It seems that ::Allgather is not
&gt;     working
&gt;     &gt; &gt; properly in my desktop.
&gt;     &gt; &gt;
&gt;     &gt; &gt;  I have contacted first mpi4py developers (Lisandro Dalcin), he
&gt;     simplified
&gt;     &gt; &gt; my problem and provided two example files (python.py and
&gt;     fortran.f90,
&gt;     &gt; &gt; please see below).
&gt;     &gt; &gt;
&gt;     &gt; &gt; We tried with different MPI vendors, the following example
&gt;     worked correclty(
&gt;     &gt; &gt; it means the final print out should be array('i', [1, 2, 3, 4,
&gt;     5, 6, 7, 8])
&gt;     &gt; &gt; )
&gt;     &gt; &gt;
&gt;     &gt; &gt; However, it is not giving correct answer in my two desktop
&gt;     (Redhat and
&gt;     &gt; &gt; ubuntu) both
&gt;     &gt; &gt; using OPENMPI
&gt;     &gt; &gt;
&gt;     &gt; &gt; Could yo look at this problem please?
&gt;     &gt; &gt;
&gt;     &gt; &gt; If you want to follow our discussion before you, you can go to
&gt;     following
&gt;     &gt; &gt; link:
&gt;     &gt; &gt;
&gt;     <a href="http://groups.google.com/group/mpi4py/browse_thread/thread/c17c660ae56ff97e">http://groups.google.com/group/mpi4py/browse_thread/thread/c17c660ae56ff97e</a>
&gt;     &gt; &gt;
&gt;     &gt; &gt; yildirim_at_memosa:~/python_intercomm$ more python.py
&gt;     &gt; &gt; from mpi4py import MPI
&gt;     &gt; &gt; from array import array
&gt;     &gt; &gt; import os
&gt;     &gt; &gt;
&gt;     &gt; &gt; progr = os.path.abspath('a.out')
&gt;     &gt; &gt; child = MPI.COMM_WORLD.Spawn(progr,[], 8)
&gt;     &gt; &gt; n = child.remote_size
&gt;     &gt; &gt; a = array('i', [0]) * n
&gt;     &gt; &gt; child.Allgather([None,MPI.INT &lt;<a href="http://MPI.INT">http://MPI.INT</a>&gt;],[a,MPI.INT
&gt;     &lt;<a href="http://MPI.INT">http://MPI.INT</a>&gt;])
&gt;     &gt; &gt; child.Disconnect()
&gt;     &gt; &gt; print a
&gt;     &gt; &gt;
&gt;     &gt; &gt; yildirim_at_memosa:~/python_intercomm$ more fortran.f90
&gt;     &gt; &gt; program main
&gt;     &gt; &gt;  use mpi
&gt;     &gt; &gt;  implicit none
&gt;     &gt; &gt;  integer :: parent, rank, val, dummy, ierr
&gt;     &gt; &gt;  call MPI_Init(ierr)
&gt;     &gt; &gt;  call MPI_Comm_get_parent(parent, ierr)
&gt;     &gt; &gt;  call MPI_Comm_rank(parent, rank, ierr)
&gt;     &gt; &gt;  val = rank + 1
&gt;     &gt; &gt;  call MPI_Allgather(val,   1, MPI_INTEGER, &amp;
&gt;     &gt; &gt;                     dummy, 0, MPI_INTEGER, &amp;
&gt;     &gt; &gt;                     parent, ierr)
&gt;     &gt; &gt;  call MPI_Comm_disconnect(parent, ierr)
&gt;     &gt; &gt;  call MPI_Finalize(ierr)
&gt;     &gt; &gt; end program main
&gt;     &gt; &gt;
&gt;     &gt; &gt; yildirim_at_memosa:~/python_intercomm$ mpif90 fortran.f90
&gt;     &gt; &gt;
&gt;     &gt; &gt; yildirim_at_memosa:~/python_intercomm$ python python.py
&gt;     &gt; &gt; array('i', [0, 0, 0, 0, 0, 0, 0, 0])
&gt;     &gt; &gt;
&gt;     &gt; &gt;
&gt;     &gt; &gt; --
&gt;     &gt; &gt; B. Gazi YILDIRIM
&gt;     &gt; &gt;
&gt;     &gt; &gt; _______________________________________________
&gt;     &gt; &gt; users mailing list
&gt;     &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;     &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;     &gt; &gt;
&gt;     &gt;
&gt;     &gt; _______________________________________________
&gt;     &gt; users mailing list
&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;     &gt;
&gt;     &gt;
&gt;     &gt;
&gt;     &gt; --
&gt;     &gt; B. Gazi YILDIRIM
&gt;     &gt; _______________________________________________
&gt;     &gt; users mailing list
&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt;     --
&gt;     Jeff Squyres
&gt;     jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
&gt;     For corporate legal information go to:
&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt;     _______________________________________________
&gt;     users mailing list
&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; 
&gt; 
&gt; -- 
&gt; B. Gazi YILDIRIM
&gt; 
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13112/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13113.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Previous message:</strong> <a href="13111.php">Olivier Riff: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>In reply to:</strong> <a href="13109.php">Battalgazi YILDIRIM: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13113.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Reply:</strong> <a href="13113.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
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
