<?
$subject_val = "[OMPI users] OpenIB error messages: reporting the default or telling you what's happening?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 11 19:26:06 2011" -->
<!-- isoreceived="20110911232606" -->
<!-- sent="Mon, 12 Sep 2011 11:25:59 +1200" -->
<!-- isosent="20110911232559" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="[OMPI users] OpenIB error messages: reporting the default or telling you what's happening?" -->
<!-- id="7a5846873373166cf9e104f3eab63ced.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OpenIB%20error%20messages:%20reporting%20the%20default%20or%20telling%20you%20what's%20happening?"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-09-11 19:25:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17212.php">Ralph Castain: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Previous message:</strong> <a href="17210.php">Kaizaad Bilimorya: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17212.php">Ralph Castain: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Reply:</strong> <a href="17212.php">Ralph Castain: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Reply:</strong> <a href="17219.php">Shamis, Pavel: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have recently seen some OpenIB time out errors and see the
<br>
following reported:
<br>
<p>&nbsp;* btl_openib_ib_retry_count - The number of times the sender will
<br>
&nbsp;&nbsp;&nbsp;attempt to retry (defaulted to 7, the maximum value).
<br>
&nbsp;* btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
<br>
&nbsp;&nbsp;&nbsp;to 10).  The actual timeout value used is calculated as:
<br>
<p>I'd like to confirm that, when those messages say &quot;defaulted to&quot;,
<br>
they are telling me what's happening on the node in question and
<br>
not just what the default is.
<br>
<p>Reason for asking is that I believe that I am setting the values of
<br>
btl_openib_ib_timeout to 20, globally, as suggested in areas of the
<br>
OpenMPI docs but those messages, if they do report what's happening,
<br>
might be telling me otherwise.
<br>
<p>In case it is relevant, the OpenMPI in question is the bog standard
<br>
RHEL5 1.4.4.
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17212.php">Ralph Castain: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Previous message:</strong> <a href="17210.php">Kaizaad Bilimorya: "Re: [OMPI users] openmpi 1.5.4 paffinity with Magny-Cours"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17212.php">Ralph Castain: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Reply:</strong> <a href="17212.php">Ralph Castain: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Reply:</strong> <a href="17219.php">Shamis, Pavel: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
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
