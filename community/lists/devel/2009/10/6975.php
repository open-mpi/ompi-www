<?
$subject_val = "Re: [OMPI devel] ompi_info requesting CPUs?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 05:54:12 2009" -->
<!-- isoreceived="20091020095412" -->
<!-- sent="Tue, 20 Oct 2009 05:53:06 -0400" -->
<!-- isosent="20091020095306" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info requesting CPUs?" -->
<!-- id="4ADD8882.3060203_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="812D9D76-AF59-4A96-9964-CD2C5F772094_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi_info requesting CPUs?<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-20 05:53:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6976.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>Previous message:</strong> <a href="6974.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>In reply to:</strong> <a href="6974.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6976.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>Reply:</strong> <a href="6976.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not that I want to delay 1.3.4 anymore than it has been but this seems 
<br>
like a possible blocker.  Can this be CMR'd for 1.3.4 or is this truly a 
<br>
1.4 CMR?
<br>
<p>--td
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Fixed in r22111
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 19, 2009, at 8:13 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Somewhere between r22090 and r22109, ompi_info started (erroneously) 
</span><br>
<span class="quotelev2">&gt;&gt; requesting CPUs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; E.g., r22090 is good:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % ompi_info | grep Open MPI:
</span><br>
<span class="quotelev2">&gt;&gt;               Open MPI: 1.7a1r22090
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But r22109 is bad:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % ompi_info | grep Open MPI:
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your job has requested more cpus per process(rank) than there
</span><br>
<span class="quotelev2">&gt;&gt; are cpus in a socket:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cpus/rank: 1
</span><br>
<span class="quotelev2">&gt;&gt; #cpus/socket: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please correct one or both of these values and try again.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A component framework failed to open properly.
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info will likely not display all configuration information
</span><br>
<span class="quotelev2">&gt;&gt;               Open MPI: 1.7a1r22109
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6976.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>Previous message:</strong> <a href="6974.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>In reply to:</strong> <a href="6974.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6976.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
<li><strong>Reply:</strong> <a href="6976.php">Ralph Castain: "Re: [OMPI devel] ompi_info requesting CPUs?"</a>
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
