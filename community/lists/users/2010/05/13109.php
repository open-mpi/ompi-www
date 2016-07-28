<?
$subject_val = "Re: [OMPI users] Allgather in inter-communicator bug,";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 20 11:48:46 2010" -->
<!-- isoreceived="20100520154846" -->
<!-- sent="Thu, 20 May 2010 11:48:40 -0400" -->
<!-- isosent="20100520154840" -->
<!-- name="Battalgazi YILDIRIM" -->
<!-- email="yildirimga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Allgather in inter-communicator bug," -->
<!-- id="AANLkTimiFfW5VY_atX6c9bfb-mCGCMmKbQNdKlqWk80V_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9F298902-534C-44D2-8051-11351B35ABF3_at_cisco.com" -->
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
<strong>From:</strong> Battalgazi YILDIRIM (<em>yildirimga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-20 11:48:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13110.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<li><strong>Previous message:</strong> <a href="13108.php">Prentice Bisbal: "Re: [OMPI users] Segmentation fault at program end with 2+ processes"</a>
<li><strong>In reply to:</strong> <a href="13106.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13112.php">Edgar Gabriel: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Reply:</strong> <a href="13112.php">Edgar Gabriel: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>you are right, I should have provided C++ and Fortran example, so I am doing
<br>
now
<br>
<p><p>Here is &quot;cplusplus.cpp&quot;
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;iostream&gt;
<br>
using namespace std;
<br>
int main()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Init();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char command[] = &quot;./a.out&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Info info;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Intercomm child = MPI::COMM_WORLD.Spawn(command, NULL, 8,info, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int a[8]={0,0,0,0,0,0,0,0};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int dummy;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;child.Allgather(&amp;dummy, 0, MPI::INT, a, 1, MPI::INT);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;child.Disconnect();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;a[&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for ( int i = 0; i &lt; 7; i++ )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; a[i] &lt;&lt; &quot;,&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; a[7] &lt;&lt; &quot;]&quot; &lt;&lt; endl;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI::Finalize();
<br>
}
<br>
<p><p>Here is again &quot;fortran.f90&quot;
<br>
<p>program main
<br>
&nbsp;use mpi
<br>
&nbsp;implicit none
<br>
&nbsp;integer :: parent, rank, val, dummy, ierr
<br>
&nbsp;call MPI_Init(ierr)
<br>
&nbsp;call MPI_Comm_get_parent(parent, ierr)
<br>
&nbsp;call MPI_Comm_rank(parent, rank, ierr)
<br>
&nbsp;val = rank + 1
<br>
&nbsp;call MPI_Allgather(val,   1, MPI_INTEGER, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dummy, 0, MPI_INTEGER, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parent, ierr)
<br>
&nbsp;call MPI_Comm_disconnect(parent, ierr)
<br>
&nbsp;call MPI_Finalize(ierr)
<br>
end program main
<br>
<p>here is how you build and run
<br>
<p>-bash-3.2$ mpif90 fortran.f90
<br>
-bash-3.2$ mpiCC -o parent cplusplus.cpp
<br>
-bash-3.2$ ./parent
<br>
a[0,0,0,0,0,0,0,0]
<br>
<p><p><p>If I use mpich2,
<br>
-bash-3.2$ mpif90 fortran.f90
<br>
-bash-3.2$ mpiCC -o parent cplusplus.cpp
<br>
-bash-3.2$ ./parent
<br>
a[1,2,3,4,5,6,7,8]
<br>
<p>I hope that you can repeat this problem to see problem with OPENMPI,
<br>
<p>Thanks,
<br>
<p><p>On Thu, May 20, 2010 at 10:09 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Can you send us an all-C or all-Fortran example that shows the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We don't have easy access to test through the python bindings.  ...ok, I
</span><br>
<span class="quotelev1">&gt; admit it, it's laziness on my part.  :-)  But having a pure Open MPI test
</span><br>
<span class="quotelev1">&gt; app would also remove some possible variables and possible sources of error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 20, 2010, at 9:43 AM, Battalgazi YILDIRIM wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jody,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think that it is correct, you can  test this example in your desktop,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, May 20, 2010 at 3:18 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt; I am really no python expert, but it looks to me as if you were
</span><br>
<span class="quotelev2">&gt; &gt; gathering arrays filled with zeroes:
</span><br>
<span class="quotelev2">&gt; &gt;  a = array('i', [0]) * n
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Shouldn't this line be
</span><br>
<span class="quotelev2">&gt; &gt;  a = array('i', [r])*n
</span><br>
<span class="quotelev2">&gt; &gt; where r is the rank of the process?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jody
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, May 20, 2010 at 12:00 AM, Battalgazi YILDIRIM
</span><br>
<span class="quotelev2">&gt; &gt; &lt;yildirimga_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am trying to use intercommunicator ::Allgather between two child
</span><br>
<span class="quotelev1">&gt; process.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have fortran and Python code,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am using mpi4py for python. It seems that ::Allgather is not working
</span><br>
<span class="quotelev3">&gt; &gt; &gt; properly in my desktop.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  I have contacted first mpi4py developers (Lisandro Dalcin), he
</span><br>
<span class="quotelev1">&gt; simplified
</span><br>
<span class="quotelev3">&gt; &gt; &gt; my problem and provided two example files (python.py and fortran.f90,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; please see below).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; We tried with different MPI vendors, the following example worked
</span><br>
<span class="quotelev1">&gt; correclty(
</span><br>
<span class="quotelev3">&gt; &gt; &gt; it means the final print out should be array('i', [1, 2, 3, 4, 5, 6, 7,
</span><br>
<span class="quotelev1">&gt; 8])
</span><br>
<span class="quotelev3">&gt; &gt; &gt; )
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; However, it is not giving correct answer in my two desktop (Redhat and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ubuntu) both
</span><br>
<span class="quotelev3">&gt; &gt; &gt; using OPENMPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Could yo look at this problem please?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If you want to follow our discussion before you, you can go to
</span><br>
<span class="quotelev1">&gt; following
</span><br>
<span class="quotelev3">&gt; &gt; &gt; link:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://groups.google.com/group/mpi4py/browse_thread/thread/c17c660ae56ff97e">http://groups.google.com/group/mpi4py/browse_thread/thread/c17c660ae56ff97e</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; yildirim_at_memosa:~/python_intercomm$ more python.py
</span><br>
<span class="quotelev3">&gt; &gt; &gt; from mpi4py import MPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt; from array import array
</span><br>
<span class="quotelev3">&gt; &gt; &gt; import os
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; progr = os.path.abspath('a.out')
</span><br>
<span class="quotelev3">&gt; &gt; &gt; child = MPI.COMM_WORLD.Spawn(progr,[], 8)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; n = child.remote_size
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a = array('i', [0]) * n
</span><br>
<span class="quotelev3">&gt; &gt; &gt; child.Allgather([None,MPI.INT],[a,MPI.INT])
</span><br>
<span class="quotelev3">&gt; &gt; &gt; child.Disconnect()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; print a
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; yildirim_at_memosa:~/python_intercomm$ more fortran.f90
</span><br>
<span class="quotelev3">&gt; &gt; &gt; program main
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  use mpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  implicit none
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  integer :: parent, rank, val, dummy, ierr
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  call MPI_Init(ierr)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  call MPI_Comm_get_parent(parent, ierr)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  call MPI_Comm_rank(parent, rank, ierr)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  val = rank + 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  call MPI_Allgather(val,   1, MPI_INTEGER, &amp;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                     dummy, 0, MPI_INTEGER, &amp;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                     parent, ierr)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  call MPI_Comm_disconnect(parent, ierr)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  call MPI_Finalize(ierr)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; end program main
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; yildirim_at_memosa:~/python_intercomm$ mpif90 fortran.f90
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; yildirim_at_memosa:~/python_intercomm$ python python.py
</span><br>
<span class="quotelev3">&gt; &gt; &gt; array('i', [0, 0, 0, 0, 0, 0, 0, 0])
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; B. Gazi YILDIRIM
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
B. Gazi YILDIRIM
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13109/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13110.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<li><strong>Previous message:</strong> <a href="13108.php">Prentice Bisbal: "Re: [OMPI users] Segmentation fault at program end with 2+ processes"</a>
<li><strong>In reply to:</strong> <a href="13106.php">Jeff Squyres: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13112.php">Edgar Gabriel: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Reply:</strong> <a href="13112.php">Edgar Gabriel: "Re: [OMPI users] Allgather in inter-communicator bug,"</a>
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
