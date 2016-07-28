<?
$subject_val = "Re: [OMPI users] make install warns about 'common symbols'";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 22:58:07 2016" -->
<!-- isoreceived="20160420025807" -->
<!-- sent="Wed, 20 Apr 2016 11:58:03 +0900" -->
<!-- isosent="20160420025803" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] make install warns about 'common symbols'" -->
<!-- id="5716F03B.9010501_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDizRSyim8SHU1om+yhtncsDU2dVFo140WuWgit3181EGA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] make install warns about 'common symbols'<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-19 22:58:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28976.php">dpchoudh .: "Re: [OMPI users] make install warns about 'common symbols'"</a>
<li><strong>Previous message:</strong> <a href="28974.php">dpchoudh .: "[OMPI users] make install warns about 'common symbols'"</a>
<li><strong>In reply to:</strong> <a href="28974.php">dpchoudh .: "[OMPI users] make install warns about 'common symbols'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28976.php">dpchoudh .: "Re: [OMPI users] make install warns about 'common symbols'"</a>
<li><strong>Reply:</strong> <a href="28976.php">dpchoudh .: "Re: [OMPI users] make install warns about 'common symbols'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is just a warning.
<br>
<p>there are some potential issues with uninitialized common symbols, but i 
<br>
cannot remember the details.
<br>
<p>bottom line, they should be avoided :
<br>
- declare global variables as static if the scope is only one source file
<br>
- always initialize global variables
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 4/20/2016 11:48 AM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While doing a 'make install' with some additional code written by me, 
</span><br>
<span class="quotelev1">&gt; I get the following message:
</span><br>
<span class="quotelev1">&gt; WARNING!  Common symbols found:
</span><br>
<span class="quotelev1">&gt; Doing a search on previous mails, I found the following thread that is 
</span><br>
<span class="quotelev1">&gt; pertinent:
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/lists/devel/2015/04/17220.php">https://www.open-mpi.org/community/lists/devel/2015/04/17220.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I could not find out exactly what this warning/error is 
</span><br>
<span class="quotelev1">&gt; trying to tell me: is there a multiple definition of a global symbol? 
</span><br>
<span class="quotelev1">&gt; (that should be an error, not a warning, right?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1% of the executables have 99% of CPU privilege!
</span><br>
<span class="quotelev1">&gt; Userspace code! Unite!! Occupy the kernel!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28974.php">http://www.open-mpi.org/community/lists/users/2016/04/28974.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28975/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28976.php">dpchoudh .: "Re: [OMPI users] make install warns about 'common symbols'"</a>
<li><strong>Previous message:</strong> <a href="28974.php">dpchoudh .: "[OMPI users] make install warns about 'common symbols'"</a>
<li><strong>In reply to:</strong> <a href="28974.php">dpchoudh .: "[OMPI users] make install warns about 'common symbols'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28976.php">dpchoudh .: "Re: [OMPI users] make install warns about 'common symbols'"</a>
<li><strong>Reply:</strong> <a href="28976.php">dpchoudh .: "Re: [OMPI users] make install warns about 'common symbols'"</a>
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
