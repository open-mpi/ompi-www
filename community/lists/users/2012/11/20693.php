<?
$subject_val = "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 13:45:24 2012" -->
<!-- isoreceived="20121109184524" -->
<!-- sent="Fri, 9 Nov 2012 10:45:20 -0800" -->
<!-- isosent="20121109184520" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated" -->
<!-- id="20121109184520.GB25017_at_stikine.sfu.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALQst9hmWv8c6iCuatitLSKXDmS18Mswh0eZVieD50cnDKiLPA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-09 13:45:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20694.php">Ralph Castain: "Re: [OMPI users] gathering problem"</a>
<li><strong>Previous message:</strong> <a href="20692.php">Jeff Squyres: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>In reply to:</strong> <a href="20689.php">Craig Tierney: "[OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20705.php">Craig Tierney: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>Reply:</strong> <a href="20705.php">Craig Tierney: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Nov 09, 2012 at 11:05:23AM -0700, Craig Tierney wrote:
<br>
<span class="quotelev1">&gt; I just built OpenMPI 1.6.3 with ifort 12.1.4.  When running ifort I am
</span><br>
<span class="quotelev1">&gt; getting the warning:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ifort: command line remark #10010: open '-pthread' is depreciated and
</span><br>
<span class="quotelev1">&gt; will be removed in a future release.  See '-help deprecated'.
</span><br>
<p>If you just want to get rid of the warning, you can edit the settings
<br>
for the wrapper compilers in share/openmpi/mpif90-wrapper-data.txt, etc.
<br>
<p>gcc -dumpspecs | grep pthread
<br>
<p>shows that -pthread adds the preprocessor flag -D_REENTRANT and the linker
<br>
flag -lpthread. I.e., removing -pthread from the
<br>
<p>compiler_flags=...
<br>
<p>line and adding -D_REENTRANT to the
<br>
<p>preprocessor_flags=...
<br>
<p>line and -lpthread to the
<br>
<p>libs=...
<br>
<p>line should do the job and should be completely equivalent.
<br>
<p>As far as Intel compilers are concerned -pthread can be replaced with
<br>
&quot;-reentrancy threaded&quot;, but that does not work when the underlying compiler
<br>
is changed, e.g., OMPI_FC=gfortran.
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Simon Fraser University
Burnaby, British Columbia
Canada
&gt; Is -pthread really needed?  Is there a configure option to change this
&gt; or should have intel not changed from how other compilers work?
&gt; 
&gt; Thanks,
&gt; Craig
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20694.php">Ralph Castain: "Re: [OMPI users] gathering problem"</a>
<li><strong>Previous message:</strong> <a href="20692.php">Jeff Squyres: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>In reply to:</strong> <a href="20689.php">Craig Tierney: "[OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20705.php">Craig Tierney: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>Reply:</strong> <a href="20705.php">Craig Tierney: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
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
