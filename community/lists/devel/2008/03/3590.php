<?
$subject_val = "Re: [OMPI devel] Session directories in $HOME?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 16:10:54 2008" -->
<!-- isoreceived="20080331201054" -->
<!-- sent="Mon, 31 Mar 2008 16:10:42 -0400" -->
<!-- isosent="20080331201042" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Session directories in $HOME?" -->
<!-- id="415E89CF-F784-4420-9FCF-A11C00D56840_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B23C3619-2CEE-4D45-8A10-ADAA3608E7A2_at_ornl.gov" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-31 16:10:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3591.php">George Bosilca: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Previous message:</strong> <a href="3589.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>In reply to:</strong> <a href="3584.php">Shipman, Galen M.: "Re: [OMPI devel] Session directories in $HOME?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3598.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3598.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I more than agree with Galen.
<br>
<p>Aurelien
<br>
Le 31 mars 08 &#224; 16:00, Shipman, Galen M. a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Slightly OT but along the same lines..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We currently have an argument to mpirun to set the HNP tmpdir (--
</span><br>
<span class="quotelev1">&gt; tmpdir).
</span><br>
<span class="quotelev1">&gt; Why don't we have an mca param to set the tmpdir for all the orted's
</span><br>
<span class="quotelev1">&gt; and such?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 31, 2008, at 3:51 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I looked over the code and I don't see any problems with the
</span><br>
<span class="quotelev2">&gt;&gt; changes. The only think I did is replacing the getenv(&quot;HOME&quot;) by
</span><br>
<span class="quotelev2">&gt;&gt; opal_home_directory ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the logic for selecting the TMP directory:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    if( NULL == (str = getenv(&quot;TMPDIR&quot;)) )
</span><br>
<span class="quotelev2">&gt;&gt;        if( NULL == (str = getenv(&quot;TEMP&quot;)) )
</span><br>
<span class="quotelev2">&gt;&gt;            if( NULL == (str = getenv(&quot;TMP&quot;)) )
</span><br>
<span class="quotelev2">&gt;&gt;                if( NULL == (str = opal_home_directory()) )
</span><br>
<span class="quotelev2">&gt;&gt;                    str = &quot;.&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you have any of those (TMPDIR, TEMP or TMP) in your environment ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 31, 2008, at 3:13 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So does anyone know why the session directories are in $HOME instead
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of /tmp?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using r18044 and every time I run the session directories are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; created in $HOME. George does this have anything to do with your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commits from earlier?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
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
<li><strong>Next message:</strong> <a href="3591.php">George Bosilca: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Previous message:</strong> <a href="3589.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>In reply to:</strong> <a href="3584.php">Shipman, Galen M.: "Re: [OMPI devel] Session directories in $HOME?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3598.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/04/3598.php">Ralph H Castain: "Re: [OMPI devel] Session directories in $HOME?"</a>
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
