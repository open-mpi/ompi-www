<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 11:13:03 2007" -->
<!-- isoreceived="20070712151303" -->
<!-- sent="Thu, 12 Jul 2007 11:13:37 -0400" -->
<!-- isosent="20070712151337" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Notes on building and running Open MPI on Red Storm" -->
<!-- id="444AF08C-4286-4DB1-B11F-CBD4ACDA7E1F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4DBBDCAE-5FAF-4B94-BB2C-87EA6D7BE13F_at_lanl.gov" -->
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
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-12 11:13:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1859.php">Don Kerr: "[OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>Previous message:</strong> <a href="1857.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>In reply to:</strong> <a href="1857.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the heads up. I've noticed this warning on the Cray  
<br>
systems here at ORNL, and haven't had a chance to put the fix in yet.
<br>
<p>This function is exposed in non-CR builds as a user interface item.  
<br>
If the user requests a checkpoint of an MPI job that was not compiled  
<br>
with C/R (or doesn't have it enabled if FT was compiled in) then it  
<br>
will respond with a nice error message instead of not responding at  
<br>
all. I go back and forth on cutting this out completely as the tools  
<br>
to checkpoint shouldn't be built if a user doesn't compile in FT  
<br>
support.
<br>
<p>I'll work on a fix for it in the next couple of days.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Jul 12, 2007, at 10:40 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 11, 2007, at 4:47 PM, Glendenning, Lisa wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   * When linking with libopen-pal, the following warning is normal:
</span><br>
<span class="quotelev2">&gt;&gt; 'In
</span><br>
<span class="quotelev2">&gt;&gt; function `checkpoint_response': warning: mkfifo is not implemented  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; will always fail'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought the checkpoint code wasn't built unless requested.  Anyway,
</span><br>
<span class="quotelev1">&gt; if you AC_CHECK_FUNCS for mkfifo, it'll fail on the Cray.  Can you
</span><br>
<span class="quotelev1">&gt; update opal/runtime/opal_cr.c to not have code that calls mkfifo()
</span><br>
<span class="quotelev1">&gt; compiled on platforms that don't have mkfifo?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1859.php">Don Kerr: "[OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>Previous message:</strong> <a href="1857.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>In reply to:</strong> <a href="1857.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
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
