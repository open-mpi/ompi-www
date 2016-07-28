<?
$subject_val = "Re: [OMPI users] About the necessity of cancelation of pending communication and the use of buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 25 09:19:24 2010" -->
<!-- isoreceived="20100525131924" -->
<!-- sent="Tue, 25 May 2010 10:19:20 -0300" -->
<!-- isosent="20100525131920" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About the necessity of cancelation of pending communication and the use of buffer" -->
<!-- id="AANLkTilrbJDNUYQF_3paqmbp5LJiXgbLlo0QGM0hFBDF_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201005250603.11606.yves.caniou_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] About the necessity of cancelation of pending communication and the use of buffer<br>
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-25 09:19:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13160.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Previous message:</strong> <a href="13158.php">Rajnesh Jindel: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>In reply to:</strong> <a href="13153.php">Yves Caniou: "[OMPI users] About the necessity of cancelation of pending communication and the use of buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13161.php">Richard Treumann: "Re: [OMPI users] About the necessity of cancelation of pending	communication and the use of buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, May 25, 2010 at 1:03 AM, Yves Caniou &lt;yves.caniou_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 2 ** When I use a Isend() operation, the manpage says that I can't use the
</span><br>
<span class="quotelev1">&gt; buffer until the operation completes.
</span><br>
<span class="quotelev1">&gt; What happens if I use an Isend() operation in a function, with a buffer
</span><br>
<span class="quotelev1">&gt; declared inside the function?
</span><br>
<span class="quotelev1">&gt; Do I have to Wait() for the communication to finish before returning, or to
</span><br>
<span class="quotelev1">&gt; declare the buffer as a global variable?
</span><br>
<p>If you declare it inside the function (an auto variable), you're
<br>
declaring it on the stack. When the function is over, the stack may be
<br>
reused and this is gonna have nasty effects. You don't need to declare
<br>
the buffer as a global, just allocate it on the heap (with new or
<br>
malloc or whatever), just make sure you don't lose track of it cause
<br>
you're probably gonna need to free that memory eventually.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13160.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Previous message:</strong> <a href="13158.php">Rajnesh Jindel: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>In reply to:</strong> <a href="13153.php">Yves Caniou: "[OMPI users] About the necessity of cancelation of pending communication and the use of buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13161.php">Richard Treumann: "Re: [OMPI users] About the necessity of cancelation of pending	communication and the use of buffer"</a>
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
