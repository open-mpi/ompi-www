<?
$subject_val = "Re: [OMPI devel] SHMEM symmetric objects in shared libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 14:21:30 2014" -->
<!-- isoreceived="20140729182130" -->
<!-- sent="Tue, 29 Jul 2014 18:21:29 +0000" -->
<!-- isosent="20140729182129" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SHMEM symmetric objects in shared libraries" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05ACBB11_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2C63E76F-AAB7-45FC-819B-AE708EF14695_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SHMEM symmetric objects in shared libraries<br>
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 14:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15321.php">Shamis, Pavel: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Previous message:</strong> <a href="15319.php">Joshua Ladd: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>In reply to:</strong> <a href="15316.php">Shamis, Pavel: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pasha,
<br>
<p>It can be done.  Cray Fortran 2008 compiler had to do this to be fully compliant with the Fortran 2008
<br>
co-array feature.
<br>
<p>Howard
<br>
<p><p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Shamis, Pavel
<br>
Sent: Tuesday, July 29, 2014 12:02 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] SHMEM symmetric objects in shared libraries
<br>
<p><p>then in your main example below do a shmem_long_fadd on my_dso_val.
<br>
It won't work unless you've put smarts in the shmem library to go through the segments of loaded shared libraries and register them with the same mechanism used for the data segment of the executable.
<br>
<p><p>In this case the &quot;smart&quot; part will be pretty complex.
<br>
<p>Best,
<br>
Pasha
<br>
<p><p>Howard
<br>
<p><p>From: devel [mailto:devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt;] On Behalf Of Joshua Ladd
<br>
Sent: Tuesday, July 29, 2014 10:57 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] SHMEM symmetric objects in shared libraries
<br>
<p>Are you claiming that in the following test, the static variable &quot;val&quot; will not be seen as a symmetric object?
<br>
#include &quot;shmem.h&quot;
<br>
<p>int main( int argc, char **argv){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;long my_pe, npes, master;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;start_pes(0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;my_pe = shmem_my_pe();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;npes = shmem_n_pes();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;master = npes - 1;
<br>
<p>&nbsp;&nbsp;&nbsp;/* only used on master */
<br>
&nbsp;&nbsp;&nbsp;static long val = 0;
<br>
<p><p>&nbsp;&nbsp;&nbsp;if(my_pe != master ){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shmem_long_fadd(&amp;val,1,master);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;shmem_barrier_all();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
Josh
<br>
<p><p>On Tue, Jul 29, 2014 at 11:27 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&lt;mailto:bert.wesarg_at_[hidden]&gt;&gt; wrote:
<br>
Hi,
<br>
<p>On 05/10/2014 02:46 PM, Bert Wesarg wrote:
<br>
Hi,
<br>
<p>Btw, I'm pretty confident, that this Open SHMEM implementation does not recognize global or static variables in shared libraries as symmetric objects. It is probably wise to note this somewhere to the users.
<br>
<p>I've never got an reply to this query. Any comments on it?
<br>
<p>Bert
<br>
<p>Kind regards,
<br>
Bert Wesarg
<br>
<p><pre>
--
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#228;t Dresden
Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451&lt;tel:%2B49%20%28351%29%20463-42451&gt;
Fax: +49 (351) 463-37773&lt;tel:%2B49%20%28351%29%20463-37773&gt;
E-Mail: bert.wesarg_at_[hidden]&lt;mailto:bert.wesarg_at_[hidden]&gt;
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15305.php">http://www.open-mpi.org/community/lists/devel/2014/07/15305.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15313.php">http://www.open-mpi.org/community/lists/devel/2014/07/15313.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15314.php">http://www.open-mpi.org/community/lists/devel/2014/07/15314.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15316.php">http://www.open-mpi.org/community/lists/devel/2014/07/15316.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15321.php">Shamis, Pavel: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Previous message:</strong> <a href="15319.php">Joshua Ladd: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>In reply to:</strong> <a href="15316.php">Shamis, Pavel: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
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
