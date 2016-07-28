<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 11 17:15:00 2006" -->
<!-- isoreceived="20061211221500" -->
<!-- sent="Mon, 11 Dec 2006 10:01:46 -0500" -->
<!-- isosent="20061211150146" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Init() corrupts argc on Linux" -->
<!-- id="C8A1DC74-C965-4F65-A2A7-4D6F05764CF6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EB8F8003-8355-468A-8E72-BED50C44D6CA_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-11 10:01:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1233.php">Roland Dreier: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<li><strong>Previous message:</strong> <a href="1231.php">Greg Watson: "[OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<li><strong>In reply to:</strong> <a href="1231.php">Greg Watson: "[OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1233.php">Roland Dreier: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<li><strong>Reply:</strong> <a href="1233.php">Roland Dreier: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 10, 2006, at 4:14 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; (Tried to open a bug, but I don't seem to have access...)
</span><br>
<p>Actually, you have an SVN account (right?), so you should be able to  
<br>
login to trac (using your SVN username and password) and then open a  
<br>
bug.
<br>
<p><span class="quotelev1">&gt; Environment:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fedora Core 5 (actually I think any Linux will do)
</span><br>
<span class="quotelev1">&gt; OMPI 1.2b1 (./configure --with-devel-headers)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Symptom:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv) corrupts the argc variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Repeat By:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Compile the following program using 'mpicc -g -o mpitest  
</span><br>
<span class="quotelev1">&gt; mpitest.c':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;          MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;          MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. See corruption under gdb:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ gdb mpitest
</span><br>
<span class="quotelev1">&gt; GNU gdb 6.5
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; (gdb) b main
</span><br>
<span class="quotelev1">&gt; Breakpoint 1 at 0x80485c5: file mpitest.c, line 6.
</span><br>
<span class="quotelev1">&gt; (gdb) r
</span><br>
<span class="quotelev1">&gt; Starting program: /home/greg/mpitest
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread -1208936784 (LWP 11171)]
</span><br>
<span class="quotelev1">&gt; [Switching to Thread -1208936784 (LWP 11171)]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Breakpoint 1, main (argc=1, argv=0xbf81fae4) at mpitest.c:6
</span><br>
<span class="quotelev1">&gt; 6               MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; (gdb) p argc
</span><br>
<span class="quotelev1">&gt; $1 = 1
</span><br>
<span class="quotelev1">&gt; (gdb) n
</span><br>
<span class="quotelev1">&gt; 7               MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; (gdb) p argc
</span><br>
<span class="quotelev1">&gt; Cannot access memory at address 0x0
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<p>That's very odd.  I don't see where this is happening in the code --  
<br>
we literally never assign that value.  Can you run this through  
<br>
valgrind and see if there's something else going on?
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1233.php">Roland Dreier: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<li><strong>Previous message:</strong> <a href="1231.php">Greg Watson: "[OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<li><strong>In reply to:</strong> <a href="1231.php">Greg Watson: "[OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1233.php">Roland Dreier: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<li><strong>Reply:</strong> <a href="1233.php">Roland Dreier: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
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
