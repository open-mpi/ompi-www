<?
$subject_val = "Re: [OMPI devel] SHMEM symmetric objects in shared libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 13:42:49 2014" -->
<!-- isoreceived="20140729174249" -->
<!-- sent="Tue, 29 Jul 2014 13:42:49 -0400" -->
<!-- isosent="20140729174249" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SHMEM symmetric objects in shared libraries" -->
<!-- id="CAG4F6z_jYGg+z1PgZK_k4WHN3i91cXgtU5zpV3OMuJzhsW2LHA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5F6FB0CDAF4F98419A0D970E1F65ED05ACBAB9_at_ECS-EXG-P-MB05.win.lanl.gov" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 13:42:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15315.php">Pritchard Jr., Howard: "Re: [OMPI devel] opal_config_bottom.h problem with trunk"</a>
<li><strong>Previous message:</strong> <a href="15313.php">Pritchard Jr., Howard: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>In reply to:</strong> <a href="15313.php">Pritchard Jr., Howard: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15316.php">Shamis, Pavel: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Reply:</strong> <a href="15316.php">Shamis, Pavel: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gotcha, missed the shared lib part...
<br>
<p><p>On Tue, Jul 29, 2014 at 1:30 PM, Pritchard Jr., Howard &lt;howardp_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  Hi Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, I think what Bert is talking about is having something like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; foobar.c
</span><br>
<span class="quotelev1">&gt; ==========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &#226;&#128;&#156;shmem.h&#226;&#128;&#157;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; long my_dso_val = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int foobar(void)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    printf(&#226;&#128;&#156;Hello from a shared library\n&#226;&#128;&#157;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ======
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cc &#226;&#128;&#147;fPIC &#226;&#128;&#147;c foobar.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cc &#226;&#128;&#147;shared &#226;&#128;&#147;o libfoobar.so foobar.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cc &#226;&#128;&#147;o berts_code berts_code.c &#226;&#128;&#147;lfoobar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then in your main example below do a shmem_long_fadd on my_dso_val.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It won&#226;&#128;&#153;t work unless you&#226;&#128;&#153;ve put smarts in the shmem library to go through
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the segments of loaded shared libraries and register them with the same
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mechanism used for the data segment of the executable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* devel [mailto:devel-bounces_at_[hidden]] *On Behalf Of *Joshua
</span><br>
<span class="quotelev1">&gt; Ladd
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, July 29, 2014 10:57 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI devel] SHMEM symmetric objects in shared libraries
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you claiming that in the following test, the static variable &quot;val&quot;
</span><br>
<span class="quotelev1">&gt; will not be seen as a symmetric object?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;shmem.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main( int argc, char **argv){
</span><br>
<span class="quotelev1">&gt;     long my_pe, npes, master;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     start_pes(0);
</span><br>
<span class="quotelev1">&gt;     my_pe = shmem_my_pe();
</span><br>
<span class="quotelev1">&gt;     npes = shmem_n_pes();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     master = npes - 1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* only used on master */
</span><br>
<span class="quotelev1">&gt;    static long val = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if(my_pe != master ){
</span><br>
<span class="quotelev1">&gt;        shmem_long_fadd(&amp;val,1,master);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    shmem_barrier_all();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 29, 2014 at 11:27 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 05/10/2014 02:46 PM, Bert Wesarg wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Btw, I'm pretty confident, that this Open SHMEM implementation does not
</span><br>
<span class="quotelev1">&gt; recognize global or static variables in shared libraries as symmetric
</span><br>
<span class="quotelev1">&gt; objects. It is probably wise to note this somewhere to the users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've never got an reply to this query. Any comments on it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Bert Wesarg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev1">&gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Technische Universit&#195;&#164;t Dresden
</span><br>
<span class="quotelev1">&gt; Zentrum f&#195;&#188;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev1">&gt; 01062 Dresden
</span><br>
<span class="quotelev1">&gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev1">&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev1">&gt; E-Mail: bert.wesarg_at_[hidden]
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15305.php">http://www.open-mpi.org/community/lists/devel/2014/07/15305.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15313.php">http://www.open-mpi.org/community/lists/devel/2014/07/15313.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15314/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15315.php">Pritchard Jr., Howard: "Re: [OMPI devel] opal_config_bottom.h problem with trunk"</a>
<li><strong>Previous message:</strong> <a href="15313.php">Pritchard Jr., Howard: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>In reply to:</strong> <a href="15313.php">Pritchard Jr., Howard: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15316.php">Shamis, Pavel: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Reply:</strong> <a href="15316.php">Shamis, Pavel: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
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
