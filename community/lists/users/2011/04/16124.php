<?
$subject_val = "Re: [OMPI users] mpi problems,";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 15:43:42 2011" -->
<!-- isoreceived="20110404194342" -->
<!-- sent="Mon, 4 Apr 2011 13:43:37 -0600" -->
<!-- isosent="20110404194337" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi problems," -->
<!-- id="821A6400-1F5E-4314-9F3C-3881EC47C905_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BANLkTi=mNJB1uaoFt5whGLLQORxMQ3uTPQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-04-04 15:43:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16125.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16123.php">Jeff Squyres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16122.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16125.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16125.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Try prepending the path to your compiler libraries.
<br>
<p>Example (bash-like):
<br>
<p>export LD_LIBRARY_PATH=/compiler/prefix/lib:/ompi/prefix/lib: 
<br>
$LD_LIBRARY_PATH
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Apr 4, 2011, at 1:33 PM, Nehemiah Dacres wrote:
&gt; altering LD_LIBRARY_PATH alter's the process's path to mpi's  
&gt; libraries, how do i alter its path to compiler libs like libfui.so. 
&gt; 1? it needs to find them cause it was compiled by a sun compiler
&gt;
&gt; On Mon, Apr 4, 2011 at 10:06 AM, Nehemiah Dacres &lt;dacresni_at_[hidden]&gt;  
&gt; wrote:
&gt;
&gt; As Ralph indicated, he'll add the hostname to the error message (but  
&gt; that might be tricky; that error message is coming from rsh/ssh...).
&gt;
&gt; In the meantime, you might try (csh style):
&gt;
&gt; foreach host (`cat list`)
&gt;    echo $host
&gt;    ls -l /opt/SUNWhpc/HPC8.2.1c/sun/bin/orted
&gt; end
&gt;
&gt;
&gt; that's what the tentakel line was refering to, or ...
&gt;
&gt;
&gt;
&gt; On Apr 4, 2011, at 10:24 AM, Nehemiah Dacres wrote:
&gt;
&gt; &gt; I have installed it via a symlink on all of the nodes, I can go  
&gt; 'tentakel which mpirun ' and it finds it' I'll check the library  
&gt; paths but isn't there a way to find out which nodes are returning  
&gt; the error?
&gt;
&gt; I found it misslinked on a couple nodes. thank you
&gt;
&gt; -- 
&gt; Nehemiah I. Dacres
&gt; System Administrator
&gt; Advanced Technology Group Saint Louis University
&gt;
&gt;
&gt;
&gt;
&gt; -- 
&gt; Nehemiah I. Dacres
&gt; System Administrator
&gt; Advanced Technology Group Saint Louis University
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16124/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16125.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16123.php">Jeff Squyres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16122.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16125.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16125.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
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
