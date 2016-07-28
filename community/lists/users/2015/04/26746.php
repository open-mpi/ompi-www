<?
$subject_val = "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 07:22:08 2015" -->
<!-- isoreceived="20150416112208" -->
<!-- sent="Thu, 16 Apr 2015 05:22:02 -0600" -->
<!-- isosent="20150416112202" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC" -->
<!-- id="CAMD57ofhdpL6tSrW1uYGOKVZpJMu6KZF-75G8_xS+vOdoATL4g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7536EEE5-283C-438A-89B5-90FC86DE7DCE_at_dkrz.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-16 07:22:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26747.php">Nathan Hjelm: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Previous message:</strong> <a href="26745.php">Thomas Jahns: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26745.php">Thomas Jahns: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26748.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26748.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I just added (last night) a pair of new MCA params for this purpose:
<br>
<p>plm_rsh_pass_path &lt;foo&gt;   prepends the designated path to the remote
<br>
shell's PATH prior to executing orted
<br>
plm_rsh_pass_libpath &lt;foo&gt;  same thing for LD_LIBRARY_PATH
<br>
<p>I believe that will resolve the problem for Andy regardless of compiler
<br>
used. In the master now, waiting for someone to verify it before adding to
<br>
1.8.5. Sadly, I am away from any cluster for the rest of this week, so I'd
<br>
welcome anyone having a chance to test it.
<br>
<p><p>On Thu, Apr 16, 2015 at 2:57 AM, Thomas Jahns &lt;jahns_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 15, 2015, at 02:11 , Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what about reconfiguring Open MPI with
</span><br>
<span class="quotelev1">&gt; LDFLAGS=&quot;-Wl,-rpath,/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic&quot;
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IIRC, an other option is : LDFLAGS=&quot;-static-intel&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; let me first state that I have no experience developing for MIC. But
</span><br>
<span class="quotelev1">&gt; regarding the Intel runtime libraries, the only sane option in my opinion
</span><br>
<span class="quotelev1">&gt; is to use the icc.cfg/ifort.cfg/icpc.cfg files that get put in the same
</span><br>
<span class="quotelev1">&gt; directory as the corresponding compiler binaries and add a line like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath,/path/to/composerxe/lib/intel??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to that file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards, Thomas
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Thomas Jahns
</span><br>
<span class="quotelev1">&gt; DKRZ GmbH, Department: Application software
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Deutsches Klimarechenzentrum
</span><br>
<span class="quotelev1">&gt; Bundesstra&#195;&#159;e 45a
</span><br>
<span class="quotelev1">&gt; D-20146 Hamburg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Phone: +49-40-460094-151
</span><br>
<span class="quotelev1">&gt; Fax: +49-40-460094-270
</span><br>
<span class="quotelev1">&gt; Email: Thomas Jahns &lt;jahns_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26745.php">http://www.open-mpi.org/community/lists/users/2015/04/26745.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26746/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26747.php">Nathan Hjelm: "Re: [OMPI users] mpi_type_create_struct not working for large counts"</a>
<li><strong>Previous message:</strong> <a href="26745.php">Thomas Jahns: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26745.php">Thomas Jahns: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26748.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26748.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
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
