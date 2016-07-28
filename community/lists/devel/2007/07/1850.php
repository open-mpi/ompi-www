<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 09:21:23 2007" -->
<!-- isoreceived="20070711132123" -->
<!-- sent="Wed, 11 Jul 2007 09:22:00 -0400" -->
<!-- isosent="20070711132200" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-environment builds" -->
<!-- id="EF9FDE83-7BC4-4C69-A42D-2A636CDBB0FA_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4694C86B.5060005_at_sun.com" -->
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
<strong>Date:</strong> 2007-07-11 09:22:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1851.php">Glendenning, Lisa: "[OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>Previous message:</strong> <a href="1849.php">Tim Prins: "Re: [OMPI devel] [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>In reply to:</strong> <a href="1846.php">Terry D. Dontje: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1847.php">Ralph H Castain: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 11, 2007, at 8:09 AM, Terry D. Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 10, 2007, at 1:26 PM, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. It may be useful to have some high-level parameters to specify a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specific run-time environment, since ORTE has multiple, related
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; frameworks (e.g., RAS and PLS).  E.g., &quot;orte_base_launcher=tm&quot;, or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; somesuch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was just writing this up in an enhancement ticket when the though
</span><br>
<span class="quotelev2">&gt;&gt; hit me: isn't this aggregate MCA parameters?  I.e.:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun --am tm ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Specifically, we'll need to make a &quot;tm&quot; AMCA file (and whatever other
</span><br>
<span class="quotelev2">&gt;&gt; ones we want), but my point is: does AMCA already give us what we  
</span><br>
<span class="quotelev2">&gt;&gt; want?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; The above sounds like a possible solution as long as we are going to
</span><br>
<span class="quotelev1">&gt; deliver a set of such files and not require each site to create their
</span><br>
<span class="quotelev1">&gt; own.  Also, can one pull in multiple AMCA files for one run thus  
</span><br>
<span class="quotelev1">&gt; you can
</span><br>
<span class="quotelev1">&gt; specify a tm AMCA and possibly some other AMCA file that the user  
</span><br>
<span class="quotelev1">&gt; may want?
</span><br>
<p>Yep. You can put a ':' between different parameters. So:
<br>
&nbsp;&nbsp;shell$ mpirun -am tm:foo:bar ...
<br>
will pull in the three AMCA files 'tm' 'foo' 'bar' in that order of  
<br>
precedence. Meaning that 'tm' can override a MCA parameter in 'foo',  
<br>
and 'foo' can override a MCA parameter in 'bar'. And any '-mca'  
<br>
command line options take a higher precedence than AMCA parameter  
<br>
files, so could override MCA parameters set by any of 'tm' 'foo' or  
<br>
'bar'.
<br>
<p>I'll put it on my list to make a faq entry for AMCA usage, as I don't  
<br>
see one.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
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
<li><strong>Next message:</strong> <a href="1851.php">Glendenning, Lisa: "[OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>Previous message:</strong> <a href="1849.php">Tim Prins: "Re: [OMPI devel] [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>In reply to:</strong> <a href="1846.php">Terry D. Dontje: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1847.php">Ralph H Castain: "Re: [OMPI devel] Multi-environment builds"</a>
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
