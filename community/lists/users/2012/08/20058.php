<?
$subject_val = "Re: [OMPI users] Infiniband performance Problem and stalling";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 29 21:46:11 2012" -->
<!-- isoreceived="20120830014611" -->
<!-- sent="Wed, 29 Aug 2012 18:46:05 -0700 (PDT)" -->
<!-- isosent="20120830014605" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband performance Problem and stalling" -->
<!-- id="1346291165.63257.YahooMailNeo_at_web121001.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="503C7DA1.2090206_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infiniband performance Problem and stalling<br>
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-29 21:46:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20059.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20057.php">Yong Qin: "[OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>In reply to:</strong> <a href="20022.php">Paul Kapinos: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20059.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="20059.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting, the&#160;log_num_mtt and&#160;log_mtts_per_seg params where not set.
Setting them to utilise 2*8G of my RAM resulted in no change to the stalls or run time ie; (19,3) (20,2) (21,1) or (6,16).&#160;
In all cases, OpenIB runs in twice the time it takes TCP,except if I push the small message max to 64K and force short messages. &#160;Then the openib times are the same as TCP and no faster.

I'ms till at a loss as to why...


________________________________
 From: Paul Kapinos &lt;kapinos_at_[hidden]&gt;
To: Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Tuesday, 28 August 2012 6:13 PM
Subject: Re: [OMPI users] Infiniband performance Problem and stalling
 
Randolph,
after reading this:

On 08/28/12 04:26, Randolph Pullen wrote:
&gt; - On occasions it seems to stall indefinately, waiting on a single receive.

... I would make a blind guess: are you aware about IB card parameters for registered memory?
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>

&quot;Waiting forever&quot; for a single operation is one of symptoms of the problem especially in 1.5.3.


best,
Paul

P.S. the lower performance with 'big' chinks is known phenomenon, cf.
<a href="http://www.scl.ameslab.gov/netpipe/">http://www.scl.ameslab.gov/netpipe/</a>
(image on bottom of the page). But the chunk size of 64k is fairly small




-- Dipl.-Inform. Paul Kapinos&#160;  -&#160;  High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,&#160; D 52074&#160; Aachen (Germany)
Tel: +49 241/80-24915
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20058/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20059.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20057.php">Yong Qin: "[OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>In reply to:</strong> <a href="20022.php">Paul Kapinos: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20059.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Reply:</strong> <a href="20059.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
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
