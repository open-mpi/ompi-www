<?
$subject_val = "Re: [OMPI devel] SHMEM symmetric objects in shared libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 12:57:20 2014" -->
<!-- isoreceived="20140729165720" -->
<!-- sent="Tue, 29 Jul 2014 12:57:20 -0400" -->
<!-- isosent="20140729165720" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SHMEM symmetric objects in shared libraries" -->
<!-- id="CAG4F6z9V9hJ6Op0xmD59Pf9eumiEtwo1=Yv2GxTZdE8FPuYywQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53D7BD65.80209_at_tu-dresden.de" -->
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
<strong>Date:</strong> 2014-07-29 12:57:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15312.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Previous message:</strong> <a href="15310.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>In reply to:</strong> <a href="15305.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15312.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Reply:</strong> <a href="15312.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Reply:</strong> <a href="15313.php">Pritchard Jr., Howard: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you claiming that in the following test, the static variable &quot;val&quot; will
<br>
not be seen as a symmetric object?
<br>
<p>#include &quot;shmem.h&quot;
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
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Josh
<br>
<p><p><p>On Tue, Jul 29, 2014 at 11:27 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 05/10/2014 02:46 PM, Bert Wesarg wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Btw, I'm pretty confident, that this Open SHMEM implementation does not
</span><br>
<span class="quotelev2">&gt;&gt; recognize global or static variables in shared libraries as symmetric
</span><br>
<span class="quotelev2">&gt;&gt; objects. It is probably wise to note this somewhere to the users.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Kind regards,
</span><br>
<span class="quotelev2">&gt;&gt; Bert Wesarg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15311/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15312.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Previous message:</strong> <a href="15310.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>In reply to:</strong> <a href="15305.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15312.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Reply:</strong> <a href="15312.php">Bert Wesarg: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
<li><strong>Reply:</strong> <a href="15313.php">Pritchard Jr., Howard: "Re: [OMPI devel] SHMEM symmetric objects in shared libraries"</a>
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
