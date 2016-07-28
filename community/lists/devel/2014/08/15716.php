<?
$subject_val = "Re: [OMPI devel] Envelope of HINDEXED_BLOCK";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 13:53:30 2014" -->
<!-- isoreceived="20140826175330" -->
<!-- sent="Tue, 26 Aug 2014 20:53:10 +0300" -->
<!-- isosent="20140826175310" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Envelope of HINDEXED_BLOCK" -->
<!-- id="CAEcYPwC6rNqjroJ3USkCdRYkH+2gGjhsGfbWbx10FsVb5ZXPJw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5FCB97DB-6202-41A6-96B0-3D5FE85D20F1_at_open-mpi.org" -->
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
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 13:53:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15717.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="15715.php">Ralph Castain: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>In reply to:</strong> <a href="15715.php">Ralph Castain: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15719.php">Ralph Castain: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Reply:</strong> <a href="15719.php">Ralph Castain: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 26 August 2014 19:27, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Do you know if this works in the trunk? If so, then it may just be a missing commit that should have come across to 1.8.2 and we can chase it down
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>$ ./autogen.pl
<br>
Open MPI autogen (buckle up!)
<br>
<p>1. Checking tool versions
<br>
<p>&nbsp;&nbsp;&nbsp;Searching for autoconf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found autoconf version 2.69; checking version...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 2 -- need 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 69 -- need 69
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; ACCEPTED
<br>
&nbsp;&nbsp;&nbsp;Searching for libtoolize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found libtoolize version 2.4.2; checking version...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 2 -- need 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 4 -- need 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 2 -- need 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; ACCEPTED
<br>
&nbsp;&nbsp;&nbsp;Searching for automake
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found automake version 1.13.4; checking version...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 1 -- need 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Found version component 13 -- need 12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;==&gt; ACCEPTED
<br>
...
<br>
libtoolize: putting libltdl files in LT_CONFIG_LTDL_DIR, `opal/libltdl'.
<br>
libtoolize: `COPYING.LIB' not found in `/usr/share/libtool/libltdl'
<br>
autoreconf: libtoolize failed with exit status: 1
<br>
Command failed: autoreconf -ivf --warnings=all,no-obsolete,no-override -I config
<br>
<p><p>Could it be related to automake 13 instead of 12 ?
<br>
<p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15717.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="15715.php">Ralph Castain: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>In reply to:</strong> <a href="15715.php">Ralph Castain: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15719.php">Ralph Castain: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Reply:</strong> <a href="15719.php">Ralph Castain: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
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
