<?
$subject_val = "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 12 11:42:35 2012" -->
<!-- isoreceived="20121112164235" -->
<!-- sent="Mon, 12 Nov 2012 09:42:30 -0700" -->
<!-- isosent="20121112164230" -->
<!-- name="Craig Tierney" -->
<!-- email="craig.tierney_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated" -->
<!-- id="CALQst9hOxZUQ2WoK8OWPpJHTh4sGV2Kz3s2nFD3U782-Y9acdg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20121109184520.GB25017_at_stikine.sfu.ca" -->
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
<strong>From:</strong> Craig Tierney (<em>craig.tierney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-12 11:42:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20706.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  gathering problem"</a>
<li><strong>Previous message:</strong> <a href="20704.php">Mark Bolstad: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>In reply to:</strong> <a href="20693.php">Martin Siegert: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks all for the suggestions.  It was more of the annoyance than
<br>
anything.  I will get them removed.  It sounds like someday the
<br>
libtool developers will (hopefully) account for the change and I won't
<br>
have to make local mods to the source code.
<br>
<p>Thanks,
<br>
Craig
<br>
<p>On Fri, Nov 9, 2012 at 11:45 AM, Martin Siegert &lt;siegert_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Fri, Nov 09, 2012 at 11:05:23AM -0700, Craig Tierney wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I just built OpenMPI 1.6.3 with ifort 12.1.4.  When running ifort I am
</span><br>
<span class="quotelev2">&gt;&gt; getting the warning:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ifort: command line remark #10010: open '-pthread' is depreciated and
</span><br>
<span class="quotelev2">&gt;&gt; will be removed in a future release.  See '-help deprecated'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you just want to get rid of the warning, you can edit the settings
</span><br>
<span class="quotelev1">&gt; for the wrapper compilers in share/openmpi/mpif90-wrapper-data.txt, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc -dumpspecs | grep pthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shows that -pthread adds the preprocessor flag -D_REENTRANT and the linker
</span><br>
<span class="quotelev1">&gt; flag -lpthread. I.e., removing -pthread from the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compiler_flags=...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; line and adding -D_REENTRANT to the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; preprocessor_flags=...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; line and -lpthread to the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libs=...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; line should do the job and should be completely equivalent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as Intel compilers are concerned -pthread can be replaced with
</span><br>
<span class="quotelev1">&gt; &quot;-reentrancy threaded&quot;, but that does not work when the underlying compiler
</span><br>
<span class="quotelev1">&gt; is changed, e.g., OMPI_FC=gfortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Martin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Martin Siegert
</span><br>
<span class="quotelev1">&gt; Simon Fraser University
</span><br>
<span class="quotelev1">&gt; Burnaby, British Columbia
</span><br>
<span class="quotelev1">&gt; Canada
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is -pthread really needed?  Is there a configure option to change this
</span><br>
<span class="quotelev2">&gt;&gt; or should have intel not changed from how other compilers work?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Craig
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20706.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  gathering problem"</a>
<li><strong>Previous message:</strong> <a href="20704.php">Mark Bolstad: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>In reply to:</strong> <a href="20693.php">Martin Siegert: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
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
