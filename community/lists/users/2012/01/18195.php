<?
$subject_val = "Re: [OMPI users] checkpointing on other transports";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 12:45:25 2012" -->
<!-- isoreceived="20120117174525" -->
<!-- sent="Tue, 17 Jan 2012 12:45:21 -0500" -->
<!-- isosent="20120117174521" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpointing on other transports" -->
<!-- id="CAANzjEnwR_JH5ppOT7O4NJF1CMkFoA4BCzXGYOykemuvF65rVw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="87wr8xukl8.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] checkpointing on other transports<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-17 12:45:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18196.php">MM: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18194.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18145.php">Dave Love: "[OMPI users] checkpointing on other transports"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have not tried to support a MTL with the checkpointing functionality, so
<br>
I do not have first hand experience with those - just the OB1/BML/BTL stack.
<br>
<p>The difficulty in porting to a new transport is really a function of how
<br>
the transport interacts with the checkpointer (e.g., BLCR). The draining
<br>
logic is handled above the PML level (in the CRCP framework), so the MTL
<br>
would only have to implement a ft_event() handler. The ft_event() handler
<br>
needs to (1) prepare the transport for checkpointing (the channel is know
<br>
to be clear at this point, but you may have to handle registered memory and
<br>
things like that), (2) continue operation after a checkpoint in the same
<br>
process image, and (3) restarting the transport on recovery into a new
<br>
process image (usually something like reinitializing the driver).
<br>
<p>The easiest way to implement these is to shutdown the driver on checkpoint
<br>
prep (something like a finalize function) and reinitialize it on
<br>
continue/restart phases (something like an init function). Depending on the
<br>
transport driver you might be able to do something better (like we do for
<br>
tcp and sm), but it is really transport driver specific.
<br>
<p>If you decide to dig into this, let me know how it goes and if I can be of
<br>
further help.
<br>
<p>-- Josh
<br>
<p>On Thu, Jan 12, 2012 at 8:16 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What would be involved in adding checkpointing to other transports,
</span><br>
<span class="quotelev1">&gt; specifically the PSM MTL?  Are there (likely to be?) technical
</span><br>
<span class="quotelev1">&gt; obstacles, and would it be a lot of work if not?  I'm asking in case it
</span><br>
<span class="quotelev1">&gt; would be easy, and we don't have to exclude QLogic from a procurement,
</span><br>
<span class="quotelev1">&gt; given they won't respond about open-mpi support.
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18195/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18196.php">MM: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18194.php">Gustavo Correa: "Re: [OMPI users] localhost only"</a>
<li><strong>In reply to:</strong> <a href="18145.php">Dave Love: "[OMPI users] checkpointing on other transports"</a>
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
