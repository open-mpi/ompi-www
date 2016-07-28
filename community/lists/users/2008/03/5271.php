<?
$subject_val = "[OMPI users] Propregate Data Transfer";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 19:33:24 2008" -->
<!-- isoreceived="20080325233324" -->
<!-- sent="Tue, 25 Mar 2008 18:33:12 -0500" -->
<!-- isosent="20080325233312" -->
<!-- name="Samir Faci" -->
<!-- email="samir.list_at_[hidden]" -->
<!-- subject="[OMPI users] Propregate Data Transfer" -->
<!-- id="1e6142750803251633l7b38fa61q233d1a27e27aee05_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Propregate Data Transfer<br>
<strong>From:</strong> Samir Faci (<em>samir.list_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 19:33:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5272.php">Jeff Squyres: "Re: [OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings"</a>
<li><strong>Previous message:</strong> <a href="5270.php">Andreas Sch&#228;fer: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,
<br>
<p>&nbsp;&nbsp;&nbsp;I currently have an application that works perfectly fine on 2 cores, but
<br>
I'm moving it to an 8 core machine and I was wondering if OpenMPI had a
<br>
built in solution, or if I would have to code this out manually.
<br>
<p>Currently, I'm processing on core X and sending the data to core 0 where it
<br>
collects it, puts it back together and eventually writes the data.  I wanted
<br>
to avoid a bottle neck on core 0 and have each core transmit to it's even or
<br>
odd pair in order to alleviate the IO cost on core 0.  (ie.  core 6 would
<br>
send to core 4, 4 sends to core 2, 2 sends to core 0.  for odd:  core 7 send
<br>
to core 5...... core 1 send to core 0 ).
<br>
<p>I'm told this is a fairly common practice to avoid bottlenecks in one node.
<br>
Does OpenMPI contain any call that would take care of this, or would I have
<br>
to code it out.
<br>
<p>Thanks you again for any help.
<br>
<p><pre>
--
Samir
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5271/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5272.php">Jeff Squyres: "Re: [OMPI users] Unexpected compile error setting FILE_NULL Errhandler using C++ Bindings"</a>
<li><strong>Previous message:</strong> <a href="5270.php">Andreas Sch&#228;fer: "Re: [OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
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
