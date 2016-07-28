<?
$subject_val = "Re: [OMPI users] compilation error with pgcc Unknown switch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 11:13:58 2012" -->
<!-- isoreceived="20120228161358" -->
<!-- sent="Tue, 28 Feb 2012 09:13:52 -0700 (MST)" -->
<!-- isosent="20120228161352" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation error with pgcc Unknown switch" -->
<!-- id="alpine.OSX.2.00.1202280911310.12520_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CADbPk81oEzA-nMwn0R24C3KCOSJ=KvQDg6xCufQY-qVZyo1skw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compilation error with pgcc Unknown switch<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-28 11:13:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18580.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18578.php">Gustavo Correa: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18570.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18632.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18632.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 27 Feb 2012, Abhinav Sarje wrote:
<br>
<p><span class="quotelev1">&gt; Hi Nathan, Gus, Manju,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got a chance to try out the XE6 support build, but with no success.
</span><br>
<span class="quotelev1">&gt; First I was getting this error: &quot;PGC-F-0010-File write error occurred
</span><br>
<span class="quotelev1">&gt; (temporary pragma .s file)&quot;. After searching online about this error,
</span><br>
<span class="quotelev1">&gt; I saw that there is a patch at
</span><br>
<span class="quotelev1">&gt; &quot;<a href="https://svn.open-mpi.org/trac/ompi/attachment/ticket/2913/openmpi-trunk-ident_string.patch">https://svn.open-mpi.org/trac/ompi/attachment/ticket/2913/openmpi-trunk-ident_string.patch</a>&quot;
</span><br>
<span class="quotelev1">&gt; for this particular error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With the patched version, I did not get this error anymore, but got
</span><br>
<span class="quotelev1">&gt; the unknown switch flag error for the flag &quot;-march=amdfam10&quot;
</span><br>
<span class="quotelev1">&gt; (specified in the XE6 configuration in the dev trunk) at a particular
</span><br>
<span class="quotelev1">&gt; point even if I use the '-noswitcherror' flag with the pgcc compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I remove this flag (-march=amdfam10), the build fails later at the
</span><br>
<span class="quotelev1">&gt; following point:
</span><br>
<span class="quotelev1">&gt; -------------------------
</span><br>
<span class="quotelev1">&gt; Making all in mca/ras/alps
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/{mydir}/openmpi-dev-trunk/build/orte/mca/ras/alps'
</span><br>
<span class="quotelev1">&gt;  CC     ras_alps_component.lo
</span><br>
<span class="quotelev1">&gt;  CC     ras_alps_module.lo
</span><br>
<span class="quotelev1">&gt; PGC-F-0206-Can't find include file alps/apInfo.h
</span><br>
<span class="quotelev1">&gt; (../../../../../orte/mca/ras/alps/ras_alps_module.c: 37)
</span><br>
<span class="quotelev1">&gt; PGC/x86-64 Linux 11.10-0: compilation aborted
</span><br>
<span class="quotelev1">&gt; make[2]: *** [ras_alps_module.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/{mydir}/openmpi-dev-trunk/build/orte/mca/ras/alps'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/{mydir}/openmpi-dev-trunk/build/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; --------------------------
</span><br>
<p>This is a known issue with Cray's frontend environment. Build on one of the internal login nodes.
<br>
<p><p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18580.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Previous message:</strong> <a href="18578.php">Gustavo Correa: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18570.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18632.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18632.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
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
