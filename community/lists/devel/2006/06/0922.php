<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 19:56:01 2006" -->
<!-- isoreceived="20060602235601" -->
<!-- sent="Fri, 2 Jun 2006 16:55:54 -0700 (PDT)" -->
<!-- isosent="20060602235554" -->
<!-- name="Jonathan Day" -->
<!-- email="imipak_at_[hidden]" -->
<!-- subject="[OMPI devel] Query on zero-copy sends" -->
<!-- id="20060602235554.24107.qmail_at_web31508.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Jonathan Day (<em>imipak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-02 19:55:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0923.php">Josh Hursey: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Previous message:</strong> <a href="0921.php">Ralph Castain: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0929.php">Galen M. Shipman: "Re: [OMPI devel] Query on zero-copy sends"</a>
<li><strong>Reply:</strong> <a href="0929.php">Galen M. Shipman: "Re: [OMPI devel] Query on zero-copy sends"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm working on developing some components for OpenMPI,
<br>
but am a little unclear as to how to implement
<br>
efficient sends and receives. I'm wanting to do
<br>
zero-copy two-sided MPI, but as far as I can see, this
<br>
is not going to be easy. As best as I can tell, the
<br>
receive mechanism copies into a temporary user buffer
<br>
then, on actually handling the receive, copies that
<br>
into the application's buffer. Would I be correct in
<br>
this interpretation?
<br>
<p>I'm also a little hazy on how to get information on
<br>
messages being passed. What information on the sending
<br>
process is visible to the receiving BTL components?
<br>
<p>Finally, I'm assuming that developers have, over time,
<br>
produced test harnesses and other useful (for
<br>
developers) tools that would have no real value to
<br>
general users. Has anyone put together a kit of
<br>
development aids for coders of new components?
<br>
<p>Jonathan Day
<br>
<p><p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0923.php">Josh Hursey: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Previous message:</strong> <a href="0921.php">Ralph Castain: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0929.php">Galen M. Shipman: "Re: [OMPI devel] Query on zero-copy sends"</a>
<li><strong>Reply:</strong> <a href="0929.php">Galen M. Shipman: "Re: [OMPI devel] Query on zero-copy sends"</a>
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
