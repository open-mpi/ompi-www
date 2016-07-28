<?
$subject_val = "[OMPI users] Killing openmpi job via programming language";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 14 07:07:01 2010" -->
<!-- isoreceived="20100714110701" -->
<!-- sent="Wed, 14 Jul 2010 14:06:54 +0300" -->
<!-- isosent="20100714110654" -->
<!-- name="Saygin Arkan" -->
<!-- email="saygenius_at_[hidden]" -->
<!-- subject="[OMPI users] Killing openmpi job via programming language" -->
<!-- id="AANLkTikr7ZCiTJgs3DMeGu25tLCiPc_F0PPZuKUx3Gj8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Killing openmpi job via programming language<br>
<strong>From:</strong> Saygin Arkan (<em>saygenius_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-14 07:06:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13633.php">Ralph Castain: "Re: [OMPI users] Killing openmpi job via programming language"</a>
<li><strong>Previous message:</strong> <a href="13631.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13633.php">Ralph Castain: "Re: [OMPI users] Killing openmpi job via programming language"</a>
<li><strong>Reply:</strong> <a href="13633.php">Ralph Castain: "Re: [OMPI users] Killing openmpi job via programming language"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'm executing an mpi program, using C++ bindings.
<br>
<p>if( rank == 0)
<br>
{
<br>
...
<br>
...
<br>
if( !isFileFound){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOG4CXX_ERROR(log, &quot;There are not any files related with the
<br>
given probe ID&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(0);
<br>
}
<br>
}
<br>
<p>Here rank zero stops working, I print the error log. But the program
<br>
continues to run.
<br>
How can I make it stop somehow?
<br>
program just halts for minutes and then I kill it manually.
<br>
<p><p><pre>
-- 
Saygin
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13632/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13633.php">Ralph Castain: "Re: [OMPI users] Killing openmpi job via programming language"</a>
<li><strong>Previous message:</strong> <a href="13631.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13633.php">Ralph Castain: "Re: [OMPI users] Killing openmpi job via programming language"</a>
<li><strong>Reply:</strong> <a href="13633.php">Ralph Castain: "Re: [OMPI users] Killing openmpi job via programming language"</a>
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
