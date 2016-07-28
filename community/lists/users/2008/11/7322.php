<?
$subject_val = "Re: [OMPI users] avoid usage of ssh on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 17 04:45:45 2008" -->
<!-- isoreceived="20081117094545" -->
<!-- sent="Mon, 17 Nov 2008 10:45:40 +0100" -->
<!-- isosent="20081117094540" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] avoid usage of ssh on local machine" -->
<!-- id="9b0da5ce0811170145u7ab31b3dk779b2d89ad040e13_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF9AA6DFC03E4D45A3BFE35E162D8AAD6AF105_at_DEERLS7E8A.ww007.siemens.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] avoid usage of ssh on local machine<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-17 04:45:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7323.php">jody: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Previous message:</strong> <a href="7321.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>In reply to:</strong> <a href="7320.php">Sun, Yongqi (E F ES EN 72): "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7323.php">jody: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Reply:</strong> <a href="7323.php">jody: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sun
<br>
<p>AFAIK, the second parameter (len) in gethostname is an input
<br>
parameter, specifying the length of the array your passing
<br>
as the first parameter. The name of the host will be placed in the
<br>
array, but it will truncated after len characters.
<br>
<p>I don't know how to determine the length of the host name, but i think
<br>
on most systems it must be less than 255.
<br>
<p><p>Jody
<br>
<p><p>On Mon, Nov 17, 2008 at 10:31 AM, Sun, Yongqi (E F ES EN 72)
<br>
&lt;yongqi.sun_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I still have no clue how to use the local machine by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My /etc/hosts file and the result of ifconfig are attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried gethostname() by myself but an abnormal result generated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My code is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ///////////////////////////////////
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; int main() {
</span><br>
<span class="quotelev1">&gt;        char name[20]; // a guess of the array size
</span><br>
<span class="quotelev1">&gt;        size_t len;
</span><br>
<span class="quotelev1">&gt;        int res;
</span><br>
<span class="quotelev1">&gt;        res = gethostname(name, len);
</span><br>
<span class="quotelev1">&gt;        printf(&quot;res = %d, name = %s, len = %lu&quot;, res, name, len); // on
</span><br>
<span class="quotelev1">&gt; my 64-bit machine, size_t is long unsigned, or?
</span><br>
<span class="quotelev1">&gt;        return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; /////////////////////////////////
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the resulting output is:
</span><br>
<span class="quotelev1">&gt;        &quot;res = 0, name = W71c-140644, len = 140737469359496&quot;
</span><br>
<span class="quotelev1">&gt; Where len is abnormally large.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7323.php">jody: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Previous message:</strong> <a href="7321.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>In reply to:</strong> <a href="7320.php">Sun, Yongqi (E F ES EN 72): "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7323.php">jody: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Reply:</strong> <a href="7323.php">jody: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
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
