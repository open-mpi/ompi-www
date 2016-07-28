<?
$subject_val = "Re: [OMPI users] Sandy Bridge performance question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 10 08:10:42 2013" -->
<!-- isoreceived="20130610121042" -->
<!-- sent="Mon, 10 Jun 2013 12:10:37 +0000" -->
<!-- isosent="20130610121037" -->
<!-- name="Iliev, Hristo" -->
<!-- email="Iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sandy Bridge performance question" -->
<!-- id="5A5117ABD18DE547BB3D3FE3D0CB318836584F_at_MBX1.rwth-ad.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F66C733_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sandy Bridge performance question<br>
<strong>From:</strong> Iliev, Hristo (<em>Iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-10 08:10:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22073.php">Jesús Escudero Sahuquillo: "[OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>Previous message:</strong> <a href="22071.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<li><strong>In reply to:</strong> <a href="22060.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
VampirTrace works great together with PAPI in order to collect performance counter readings and to combine them with the function call/MPI traces. Then Vampir's &quot;Performance Radar&quot; feature can be used to quickly spot bottlenecks in your application. The only downside is that this kind of profiling can generate immense amounts of trace data and having the trace event buffers constantly flushed to the disk or to a network filesystem can significantly skew the performance picture, especially in the latter case.
<br>
<p>Just my &#226;&#130;&#172;0,02.
<br>
<p><pre>
--
Hristo Iliev, PhD &#226;&#128;&#147; High Performance Computing Team
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23, D 52074 Aachen (Germany)
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
&gt; On Behalf Of Jeff Squyres (jsquyres)
&gt; Sent: Friday, June 07, 2013 2:54 PM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] Sandy Bridge performance question
&gt; 
&gt; On Jun 7, 2013, at 5:28 AM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt;
&gt; wrote:
&gt; 
&gt; &gt; Regarding VTune, we have a code that doesn't scale well so that's a good
&gt; tip.  I have access to VTune, I've used it.  But I only remember looking at
&gt; OpenMP, I didn't know it could handle MPI runs. That would be great.
&gt; 
&gt; You might have to tweak it to do the Right things with MPI jobs.  DDT and
&gt; Totalview have access to performance counters too, IIRC.
&gt; 
&gt; &gt; Is VampirTrace (?) is another option for identifying communication
&gt; bottlenecks, serial content, etc.?
&gt; 
&gt; Yes.
&gt; 
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22072/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22073.php">Jesús Escudero Sahuquillo: "[OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>Previous message:</strong> <a href="22071.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<li><strong>In reply to:</strong> <a href="22060.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
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
