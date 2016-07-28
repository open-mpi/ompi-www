<?
$subject_val = "Re: [OMPI devel] Envelope of HINDEXED_BLOCK";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 15:14:42 2014" -->
<!-- isoreceived="20140826191442" -->
<!-- sent="Tue, 26 Aug 2014 12:14:05 -0700" -->
<!-- isosent="20140826191405" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Envelope of HINDEXED_BLOCK" -->
<!-- id="397415CF-FE16-4680-BDDD-E0098F377026_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwC6rNqjroJ3USkCdRYkH+2gGjhsGfbWbx10FsVb5ZXPJw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Envelope of HINDEXED_BLOCK<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 15:14:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15720.php">Paul Hargrove: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Previous message:</strong> <a href="15718.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="15716.php">Lisandro Dalcin: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15720.php">Paul Hargrove: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Reply:</strong> <a href="15720.php">Paul Hargrove: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 26, 2014, at 10:53 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 26 August 2014 19:27, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Do you know if this works in the trunk? If so, then it may just be a missing commit that should have come across to 1.8.2 and we can chase it down
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./autogen.pl
</span><br>
<span class="quotelev1">&gt; Open MPI autogen (buckle up!)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Checking tool versions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Searching for autoconf
</span><br>
<span class="quotelev1">&gt;     Found autoconf version 2.69; checking version...
</span><br>
<span class="quotelev1">&gt;       Found version component 2 -- need 2
</span><br>
<span class="quotelev1">&gt;       Found version component 69 -- need 69
</span><br>
<span class="quotelev1">&gt;     ==&gt; ACCEPTED
</span><br>
<span class="quotelev1">&gt;   Searching for libtoolize
</span><br>
<span class="quotelev1">&gt;     Found libtoolize version 2.4.2; checking version...
</span><br>
<span class="quotelev1">&gt;       Found version component 2 -- need 2
</span><br>
<span class="quotelev1">&gt;       Found version component 4 -- need 4
</span><br>
<span class="quotelev1">&gt;       Found version component 2 -- need 2
</span><br>
<span class="quotelev1">&gt;     ==&gt; ACCEPTED
</span><br>
<span class="quotelev1">&gt;   Searching for automake
</span><br>
<span class="quotelev1">&gt;     Found automake version 1.13.4; checking version...
</span><br>
<span class="quotelev1">&gt;       Found version component 1 -- need 1
</span><br>
<span class="quotelev1">&gt;       Found version component 13 -- need 12
</span><br>
<span class="quotelev1">&gt;     ==&gt; ACCEPTED
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; libtoolize: putting libltdl files in LT_CONFIG_LTDL_DIR, `opal/libltdl'.
</span><br>
<span class="quotelev1">&gt; libtoolize: `COPYING.LIB' not found in `/usr/share/libtool/libltdl'
</span><br>
<span class="quotelev1">&gt; autoreconf: libtoolize failed with exit status: 1
</span><br>
<span class="quotelev1">&gt; Command failed: autoreconf -ivf --warnings=all,no-obsolete,no-override -I config
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could it be related to automake 13 instead of 12 ?
</span><br>
<p>I doubt that - I use automake (GNU automake) 1.14.1
<br>
<p>Could be an issue of glibtool vs libtool?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev1">&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15716.php">http://www.open-mpi.org/community/lists/devel/2014/08/15716.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15719/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15720.php">Paul Hargrove: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Previous message:</strong> <a href="15718.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="15716.php">Lisandro Dalcin: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15720.php">Paul Hargrove: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Reply:</strong> <a href="15720.php">Paul Hargrove: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
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
