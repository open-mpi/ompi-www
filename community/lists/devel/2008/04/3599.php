<?
$subject_val = "Re: [OMPI devel] Session directories in $HOME?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 14:09:41 2008" -->
<!-- isoreceived="20080401180941" -->
<!-- sent="Tue, 01 Apr 2008 14:05:58 -0400" -->
<!-- isosent="20080401180558" -->
<!-- name="Shipman, Galen M." -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Session directories in $HOME?" -->
<!-- id="7D13F9B9-AFD6-444F-AD47-F2E81B8D4F39_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C417D146.CE8C%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Session directories in $HOME?<br>
<strong>From:</strong> Shipman, Galen M. (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-01 14:05:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3600.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Previous message:</strong> <a href="3598.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>In reply to:</strong> <a href="3598.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3600.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Reply:</strong> <a href="3600.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 1, 2008, at 1:47 PM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Ummm...actually, there already is an MCA param that does precisely  
</span><br>
<span class="quotelev1">&gt; that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_tmpdir_base
</span><br>
<p>Perhaps we can modify this so that it reports in ompi_info?
<br>
<p>- galen
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Been there for years...sets the tmpdir for both orteds and procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The tmpdir argument for mpirun is there if you want to ONLY set the  
</span><br>
<span class="quotelev1">&gt; tmpdir
</span><br>
<span class="quotelev1">&gt; base for mpirun. It provides a protective mechanism for cases where  
</span><br>
<span class="quotelev1">&gt; the head
</span><br>
<span class="quotelev1">&gt; node is configured differently than the compute nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/31/08 2:10 PM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I more than agree with Galen.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt; Le 31 mars 08 &#224; 16:00, Shipman, Galen M. a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Slightly OT but along the same lines..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We currently have an argument to mpirun to set the HNP tmpdir (--
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tmpdir).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why don't we have an mca param to set the tmpdir for all the orted's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and such?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Galen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 31, 2008, at 3:51 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I looked over the code and I don't see any problems with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; changes. The only think I did is replacing the getenv(&quot;HOME&quot;) by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_home_directory ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is the logic for selecting the TMP directory:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    if( NULL == (str = getenv(&quot;TMPDIR&quot;)) )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        if( NULL == (str = getenv(&quot;TEMP&quot;)) )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            if( NULL == (str = getenv(&quot;TMP&quot;)) )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                if( NULL == (str = opal_home_directory()) )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                    str = &quot;.&quot;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you have any of those (TMPDIR, TEMP or TMP) in your  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 31, 2008, at 3:13 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So does anyone know why the session directories are in $HOME  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; instead
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of /tmp?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm using r18044 and every time I run the session directories are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; created in $HOME. George does this have anything to do with your
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; commits from earlier?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="3600.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Previous message:</strong> <a href="3598.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>In reply to:</strong> <a href="3598.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3600.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Reply:</strong> <a href="3600.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
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
