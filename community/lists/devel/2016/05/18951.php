<?
$subject_val = "Re: [OMPI devel] OMPIO vs ROMIO";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 09:44:09 2016" -->
<!-- isoreceived="20160510134409" -->
<!-- sent="Tue, 10 May 2016 08:44:06 -0500" -->
<!-- isosent="20160510134406" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPIO vs ROMIO" -->
<!-- id="b07f649a-24a2-38d5-667f-accd8004bf2a_at_central.uh.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CANi1EtOht9yvZp6b6uJSdm9b0sYJXgC2FjRXN55wWzkJWqZf1A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPIO vs ROMIO<br>
<strong>From:</strong> Edgar Gabriel (<em>egabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 09:44:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18952.php">Paul Hargrove: "[OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
<li><strong>Previous message:</strong> <a href="18950.php">Sreenidhi Bharathkar Ramesh: "[OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>In reply to:</strong> <a href="18950.php">Sreenidhi Bharathkar Ramesh: "[OMPI devel] OMPIO vs ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18963.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>Reply:</strong> <a href="18963.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
in the 1.7, 1.8 and 1.10 series ROMIO remains the default. In the 
<br>
upcomgin 2.x series, OMPIO will be the default, except for Lustre file 
<br>
systems, where we will stick with ROMIO as the primary resource.
<br>
<p>Regarding performance comparison, we ran numerous tests late last year 
<br>
and early this year. It really depends on the application scenario and 
<br>
the platform that you are using. If you want to know which one should 
<br>
you use, I would definitely suggest to stick with ROMIO in the 1.10 
<br>
series, since many of the bug fixes of OMPIO that we did in the last two 
<br>
years could not be back-ported to the 1.10 series for technical reasons. 
<br>
If you plan to switch to the 2.x series, it might be easiest to just run 
<br>
a couple of tests and compare the performance for your application on 
<br>
your platform, and base your decision on that.
<br>
<p>Edgar
<br>
<p><p>On 5/10/2016 6:32 AM, Sreenidhi Bharathkar Ramesh wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. During default build of OpenMPI, it looks like both ompio.la 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://ompio.la">http://ompio.la</a>&gt; and romio.la &lt;<a href="http://romio.la">http://romio.la</a>&gt; are built.  Which I/O 
</span><br>
<span class="quotelev1">&gt; MCA library is used and based on what is the decision taken ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Are there any statistics available to compare these two - OMPIO vs 
</span><br>
<span class="quotelev1">&gt; ROMIO ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI v1.10.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; - Sreenidhi.
</span><br>
<p><pre>
--
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18951/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18952.php">Paul Hargrove: "[OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
<li><strong>Previous message:</strong> <a href="18950.php">Sreenidhi Bharathkar Ramesh: "[OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>In reply to:</strong> <a href="18950.php">Sreenidhi Bharathkar Ramesh: "[OMPI devel] OMPIO vs ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18963.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<li><strong>Reply:</strong> <a href="18963.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
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
