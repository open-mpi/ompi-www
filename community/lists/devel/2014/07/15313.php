<?
$subject_val = "Re: [OMPI devel] SHMEM symmetric objects in shared libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 13:30:46 2014" -->
<!-- isoreceived="20140729173046" -->
<!-- sent="Tue, 29 Jul 2014 17:30:42 +0000" -->
<!-- isosent="20140729173042" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SHMEM symmetric objects in shared libraries" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05ACBAB9_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAG4F6z9V9hJ6Op0xmD59Pf9eumiEtwo1=Yv2GxTZdE8FPuYywQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-07-29 13:30:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15314.php">Joshua Ladd: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Previous message:</strong> <a href="15312.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>In reply to:</strong> <a href="15311.php">Joshua Ladd: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15314.php">Joshua Ladd: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Reply:</strong> <a href="15314.php">Joshua Ladd: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>

<br>
No, I think what Bert is talking about is having something like
<br>

<br>
foobar.c
<br>
==========================
<br>
#include &#226;&#128;&#156;shmem.h&#226;&#128;&#157;
<br>

<br>
long my_dso_val = 0;
<br>

<br>
int foobar(void)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;printf(&#226;&#128;&#156;Hello from a shared library\n&#226;&#128;&#157;);
<br>
}
<br>

<br>
======
<br>

<br>
cc &#226;&#128;&#147;fPIC &#226;&#128;&#147;c foobar.c
<br>
cc &#226;&#128;&#147;shared &#226;&#128;&#147;o libfoobar.so foobar.o
<br>
cc &#226;&#128;&#147;o berts_code berts_code.c &#226;&#128;&#147;lfoobar
<br>

<br>
then in your main example below do a shmem_long_fadd on my_dso_val.
<br>
It won&#226;&#128;&#153;t work unless you&#226;&#128;&#153;ve put smarts in the shmem library to go through
<br>
the segments of loaded shared libraries and register them with the same
<br>
mechanism used for the data segment of the executable.
<br>

<br>
Howard
<br>

<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Joshua Ladd
<br>
Sent: Tuesday, July 29, 2014 10:57 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] SHMEM symmetric objects in shared libraries
<br>

<br>
Are you claiming that in the following test, the static variable &quot;val&quot; will not be seen as a symmetric object?
<br>
#include &quot;shmem.h&quot;
<br>

<br>
int main( int argc, char **argv){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;long my_pe, npes, master;
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;start_pes(0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;my_pe = shmem_my_pe();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;npes = shmem_n_pes();
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;master = npes - 1;
<br>

<br>
&nbsp;&nbsp;&nbsp;/* only used on master */
<br>
&nbsp;&nbsp;&nbsp;static long val = 0;
<br>

<br>

<br>
&nbsp;&nbsp;&nbsp;if(my_pe != master ){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shmem_long_fadd(&amp;val,1,master);
<br>
&nbsp;&nbsp;&nbsp;}
<br>

<br>
&nbsp;&nbsp;&nbsp;shmem_barrier_all();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
Josh
<br>

<br>

<br>
On Tue, Jul 29, 2014 at 11:27 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&lt;mailto:bert.wesarg_at_[hidden]&gt;&gt; wrote:
<br>
Hi,
<br>

<br>
On 05/10/2014 02:46 PM, Bert Wesarg wrote:
<br>
Hi,
<br>

<br>
Btw, I'm pretty confident, that this Open SHMEM implementation does not
<br>
recognize global or static variables in shared libraries as symmetric
<br>
objects. It is probably wise to note this somewhere to the users.
<br>

<br>
I've never got an reply to this query. Any comments on it?
<br>

<br>
Bert
<br>

<br>
Kind regards,
<br>
Bert Wesarg
<br>

<br>
--
<br>
Dipl.-Inf. Bert Wesarg
<br>
wiss. Mitarbeiter
<br>

<br>
Technische Universit&#195;&#164;t Dresden
<br>
Zentrum f&#195;&#188;r Informationsdienste und Hochleistungsrechnen (ZIH)
<br>
01062 Dresden
<br>
Tel.: +49 (351) 463-42451&lt;tel:%2B49%20%28351%29%20463-42451&gt;
<br>
Fax: +49 (351) 463-37773&lt;tel:%2B49%20%28351%29%20463-37773&gt;
<br>
E-Mail: bert.wesarg_at_[hidden]&lt;mailto:bert.wesarg_at_[hidden]&gt;
<br>

<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15305.php">http://www.open-mpi.org/community/lists/devel/2014/07/15305.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15313/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15314.php">Joshua Ladd: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Previous message:</strong> <a href="15312.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>In reply to:</strong> <a href="15311.php">Joshua Ladd: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15314.php">Joshua Ladd: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Reply:</strong> <a href="15314.php">Joshua Ladd: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
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
