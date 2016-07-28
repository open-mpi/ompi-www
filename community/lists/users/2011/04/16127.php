<?
$subject_val = "Re: [OMPI users] mpi problems,";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 16:03:31 2011" -->
<!-- isoreceived="20110404200331" -->
<!-- sent="Mon, 4 Apr 2011 14:03:26 -0600" -->
<!-- isosent="20110404200326" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi problems," -->
<!-- id="3A88CE2F-A07F-432C-8A94-3DEFE8FAF27F_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BANLkTikBkydN+tdbPUc8Y_Sfd+p8Q0nKjA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi problems,<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-04 16:03:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16128.php">Michael Di Domenico: "[OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Previous message:</strong> <a href="16126.php">Ralph Castain: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16125.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What does 'ldd ring2' show?  How was it compiled?
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Apr 4, 2011, at 1:58 PM, Nehemiah Dacres wrote:
&gt; [jian_at_therock ~]$ echo $LD_LIBRARY_PATH
&gt; /opt/sun/sunstudio12.1/lib:/opt/vtk/lib:/opt/gridengine/lib/lx26- 
&gt; amd64:/opt/gridengine/lib/lx26-amd64:/home/jian/.crlibs:/home/ 
&gt; jian/.crlibs32
&gt; [jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/bin/mpirun  -np 4 - 
&gt; hostfile list ring2
&gt; ring2: error while loading shared libraries: libfui.so.1: cannot  
&gt; open shared object file: No such file or directory
&gt; ring2: error while loading shared libraries: libfui.so.1: cannot  
&gt; open shared object file: No such file or directory
&gt; ring2: error while loading shared libraries: libfui.so.1: cannot  
&gt; open shared object file: No such file or directory
&gt; mpirun: killing job...
&gt;
&gt; --------------------------------------------------------------------------
&gt; mpirun noticed that process rank 1 with PID 31763 on node  
&gt; compute-0-1 exited on signal 0 (Unknown signal 0).
&gt; --------------------------------------------------------------------------
&gt; mpirun: clean termination accomplished
&gt;
&gt; I really don't know what's wrong here. I was sure that would work
&gt;
&gt; On Mon, Apr 4, 2011 at 2:43 PM, Samuel K. Gutierrez  
&gt; &lt;samuel_at_[hidden]&gt; wrote:
&gt; Hi,
&gt;
&gt; Try prepending the path to your compiler libraries.
&gt;
&gt; Example (bash-like):
&gt;
&gt; export LD_LIBRARY_PATH=/compiler/prefix/lib:/ompi/prefix/lib: 
&gt; $LD_LIBRARY_PATH
&gt;
&gt; --
&gt; Samuel K. Gutierrez
&gt; Los Alamos National Laboratory
&gt;
&gt;
&gt; On Apr 4, 2011, at 1:33 PM, Nehemiah Dacres wrote:
&gt;
&gt;&gt; altering LD_LIBRARY_PATH alter's the process's path to mpi's  
&gt;&gt; libraries, how do i alter its path to compiler libs like libfui.so. 
&gt;&gt; 1? it needs to find them cause it was compiled by a sun compiler
&gt;&gt;
&gt;&gt; On Mon, Apr 4, 2011 at 10:06 AM, Nehemiah Dacres &lt;dacresni_at_[hidden]&gt;  
&gt;&gt; wrote:
&gt;&gt;
&gt;&gt; As Ralph indicated, he'll add the hostname to the error message  
&gt;&gt; (but that might be tricky; that error message is coming from rsh/ 
&gt;&gt; ssh...).
&gt;&gt;
&gt;&gt; In the meantime, you might try (csh style):
&gt;&gt;
&gt;&gt; foreach host (`cat list`)
&gt;&gt;    echo $host
&gt;&gt;    ls -l /opt/SUNWhpc/HPC8.2.1c/sun/bin/orted
&gt;&gt; end
&gt;&gt;
&gt;&gt;
&gt;&gt; that's what the tentakel line was refering to, or ...
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; On Apr 4, 2011, at 10:24 AM, Nehemiah Dacres wrote:
&gt;&gt;
&gt;&gt; &gt; I have installed it via a symlink on all of the nodes, I can go  
&gt;&gt; 'tentakel which mpirun ' and it finds it' I'll check the library  
&gt;&gt; paths but isn't there a way to find out which nodes are returning  
&gt;&gt; the error?
&gt;&gt;
&gt;&gt; I found it misslinked on a couple nodes. thank you
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; Nehemiah I. Dacres
&gt;&gt; System Administrator
&gt;&gt; Advanced Technology Group Saint Louis University
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; Nehemiah I. Dacres
&gt;&gt; System Administrator
&gt;&gt; Advanced Technology Group Saint Louis University
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt;
&gt; -- 
&gt; Nehemiah I. Dacres
&gt; System Administrator
&gt; Advanced Technology Group Saint Louis University
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16127/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16128.php">Michael Di Domenico: "[OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Previous message:</strong> <a href="16126.php">Ralph Castain: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16125.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
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
