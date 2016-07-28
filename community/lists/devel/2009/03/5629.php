<?
$subject_val = "[OMPI devel] Manipulating OPAL event system";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 20:31:42 2009" -->
<!-- isoreceived="20090312003142" -->
<!-- sent="Thu, 12 Mar 2009 00:31:36 +0000" -->
<!-- isosent="20090312003136" -->
<!-- name="Timothy Hayes" -->
<!-- email="hayesti_at_[hidden]" -->
<!-- subject="[OMPI devel] Manipulating OPAL event system" -->
<!-- id="f6ed2720903111731k73e7614di9febdee6b955cb2d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Manipulating OPAL event system<br>
<strong>From:</strong> Timothy Hayes (<em>hayesti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 20:31:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5630.php">Paul H. Hargrove: "Re: [OMPI devel] Manipulating OPAL event system"</a>
<li><strong>Previous message:</strong> <a href="5628.php">Ralph Castain: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5630.php">Paul H. Hargrove: "Re: [OMPI devel] Manipulating OPAL event system"</a>
<li><strong>Reply:</strong> <a href="5630.php">Paul H. Hargrove: "Re: [OMPI devel] Manipulating OPAL event system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I'm currently writing my own BTL component that utilises a lightweight Linux
<br>
socket module. It wouldn't have nearly as  much functionality as a TCP/IP
<br>
socket but it does the job and I managed to add a simple polling function
<br>
into the module, it sleeps for whatever amount of time is entered in user
<br>
space then checks various things (if any messages have come in) and returns
<br>
the mask. It's simple and probably not the best, but it works for the
<br>
moment. :-)
<br>
<p>I'm curious as to how I can can get this into the OPAL event system. I see
<br>
it's based on libevent and after reading through the documentation I can see
<br>
what it does but now how to make it work in my circumstance. It says it
<br>
supports select(2) and poll(2) but when calling event_set() the only
<br>
parameter I seem to be able to set is EV_READ or EV_WRITE, there's nothing
<br>
further to indicate I want to poll the file descriptor (as opposed to
<br>
calling select on it). Maybe I'm missing something without realising, but
<br>
should my socket module be implementing some function to reveal what ways it
<br>
can be queried for the presence of information? If not, maybe somebody has
<br>
an idea of how I can make it work with the OPAL event system.
<br>
<p>Any advice or information would be greatly appreciated.
<br>
<p>Kind regards
<br>
Tim Hayes
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5629/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5630.php">Paul H. Hargrove: "Re: [OMPI devel] Manipulating OPAL event system"</a>
<li><strong>Previous message:</strong> <a href="5628.php">Ralph Castain: "Re: [OMPI devel] Meta Question -- Open MPI: Is it a dessert topping or is it a floor wax?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5630.php">Paul H. Hargrove: "Re: [OMPI devel] Manipulating OPAL event system"</a>
<li><strong>Reply:</strong> <a href="5630.php">Paul H. Hargrove: "Re: [OMPI devel] Manipulating OPAL event system"</a>
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
