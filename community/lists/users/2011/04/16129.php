<?
$subject_val = "Re: [OMPI users] mpi problems,";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 20:33:36 2011" -->
<!-- isoreceived="20110405003336" -->
<!-- sent="Mon, 04 Apr 2011 20:35:35 -0400" -->
<!-- isosent="20110405003535" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi problems," -->
<!-- id="4D9A63D7.5040305_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A7F646DD-C820-4911-A881-0E2EB2CF1920_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-04 20:35:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16130.php">David Zhang: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Previous message:</strong> <a href="16128.php">Michael Di Domenico: "[OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>In reply to:</strong> <a href="16126.php">Ralph Castain: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16156.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16156.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
libfui.so is a library a part of the Solaris Studio FORTRAN tools.  It 
<br>
should be located under lib from where your Solaris Studio compilers are 
<br>
installed from.  So one question is whether you actually have Studio 
<br>
Fortran installed on all your nodes or not?
<br>
<p>--td
<br>
<p>On 04/04/2011 04:02 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Well, where is libfui located? Is that location in your ld path? Is 
</span><br>
<span class="quotelev1">&gt; the lib present on all nodes in your hostfile?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 4, 2011, at 1:58 PM, Nehemiah Dacres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [jian_at_therock ~]$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; /opt/sun/sunstudio12.1/lib:/opt/vtk/lib:/opt/gridengine/lib/lx26-amd64:/opt/gridengine/lib/lx26-amd64:/home/jian/.crlibs:/home/jian/.crlibs32
</span><br>
<span class="quotelev2">&gt;&gt; [jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/bin/mpirun  -np 4 
</span><br>
<span class="quotelev2">&gt;&gt; -hostfile list ring2
</span><br>
<span class="quotelev2">&gt;&gt; ring2: error while loading shared libraries: libfui.so.1: cannot open 
</span><br>
<span class="quotelev2">&gt;&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; ring2: error while loading shared libraries: libfui.so.1: cannot open 
</span><br>
<span class="quotelev2">&gt;&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; ring2: error while loading shared libraries: libfui.so.1: cannot open 
</span><br>
<span class="quotelev2">&gt;&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 1 with PID 31763 on node compute-0-1 
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 0 (Unknown signal 0).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I really don't know what's wrong here. I was sure that would work
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 4, 2011 at 2:43 PM, Samuel K. Gutierrez &lt;samuel_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:samuel_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Try prepending the path to your compiler libraries.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Example (bash-like):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     export
</span><br>
<span class="quotelev2">&gt;&gt;     LD_LIBRARY_PATH=/compiler/prefix/lib:/ompi/prefix/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --
</span><br>
<span class="quotelev2">&gt;&gt;     Samuel K. Gutierrez
</span><br>
<span class="quotelev2">&gt;&gt;     Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Apr 4, 2011, at 1:33 PM, Nehemiah Dacres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     altering LD_LIBRARY_PATH alter's the process's path to mpi's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libraries, how do i alter its path to compiler libs like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libfui.so.1? it needs to find them cause it was compiled by a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     sun compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On Mon, Apr 4, 2011 at 10:06 AM, Nehemiah Dacres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;dacresni_at_[hidden] &lt;mailto:dacresni_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             As Ralph indicated, he'll add the hostname to the error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             message (but that might be tricky; that error message is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             coming from rsh/ssh...).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             In the meantime, you might try (csh style):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             foreach host (`cat list`)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                echo $host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                ls -l /opt/SUNWhpc/HPC8.2.1c/sun/bin/orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             end
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         that's what the tentakel line was refering to, or ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             On Apr 4, 2011, at 10:24 AM, Nehemiah Dacres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;             &gt; I have installed it via a symlink on all of the nodes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             I can go 'tentakel which mpirun ' and it finds it' I'll
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             check the library paths but isn't there a way to find
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             out which nodes are returning the error?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I found it misslinked on a couple nodes. thank you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Nehemiah I. Dacres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         System Administrator
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Advanced Technology Group Saint Louis University
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Nehemiah I. Dacres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     System Administrator
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Advanced Technology Group Saint Louis University
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Nehemiah I. Dacres
</span><br>
<span class="quotelev2">&gt;&gt; System Administrator
</span><br>
<span class="quotelev2">&gt;&gt; Advanced Technology Group Saint Louis University
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16129/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16129/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16130.php">David Zhang: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Previous message:</strong> <a href="16128.php">Michael Di Domenico: "[OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>In reply to:</strong> <a href="16126.php">Ralph Castain: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16156.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16156.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
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
