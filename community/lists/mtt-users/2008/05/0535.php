<?
$subject_val = "Re: [MTT users] Fail to run MTT, maybe authorization failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 10:41:55 2008" -->
<!-- isoreceived="20080507144155" -->
<!-- sent="Wed, 7 May 2008 10:41:03 -0400" -->
<!-- isosent="20080507144103" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Fail to run MTT, maybe authorization failure" -->
<!-- id="8EF3DAAC-92B2-48E5-91E2-38F8E97B2D65_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF1F3D0C30.C0CB9A7C-ON48257442.0048A815-48257442.0048B6F3_at_cn.ibm.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Fail to run MTT, maybe authorization failure<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 10:41:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0536.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>Previous message:</strong> <a href="0534.php">Josh Hursey: "Re: [MTT users] MTT server side problem"</a>
<li><strong>In reply to:</strong> <a href="0532.php">Wen Hao Wang: "[MTT users] Fail to run MTT, maybe authorization failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brad Benton (CC'ed on this mail) is the holder of the IBM Open MPI MTT  
<br>
username/password -- he can probably help you out.
<br>
<p><p>On May 7, 2008, at 9:26 AM, Wen Hao Wang wrote:
<br>
<p><span class="quotelev1">&gt; Hi all:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to MTT. Today I applied for one MTT account and got the  
</span><br>
<span class="quotelev1">&gt; confirmation mail with password. But I failed to run client/mtt  
</span><br>
<span class="quotelev1">&gt; after setting mttdatabase_username, mttdatabase_password and  
</span><br>
<span class="quotelev1">&gt; mttdatabase_platform. Following message is printed out:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_valiant MTT]# client/mtt -d --force -f samples/ompi-core- 
</span><br>
<span class="quotelev1">&gt; template.ini
</span><br>
<span class="quotelev1">&gt; Debug is 1, Verbose is 1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Evaluating: <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev1">&gt; Evaluating: OMPI
</span><br>
<span class="quotelev1">&gt; Evaluating: redhat
</span><br>
<span class="quotelev1">&gt; Set HTTP credentials for realm &quot;OMPI&quot;
</span><br>
<span class="quotelev1">&gt; MTTDatabase getting a client serial number...
</span><br>
<span class="quotelev1">&gt; MTTDatabase trying proxy: / Default (none)
</span><br>
<span class="quotelev1">&gt; *** WARNING: &gt;&gt; Failed test ping to MTTDatabase URL:
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org:443/mtt/submit/">https://www.open-mpi.org:443/mtt/submit/</a>
</span><br>
<span class="quotelev1">&gt; *** WARNING: &gt;&gt; Error was: 401 Authorization Required
</span><br>
<span class="quotelev1">&gt; &lt;!DOCTYPE HTML PUBLIC &quot;-//IETF//DTD HTML 2.0//EN&quot;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;html&gt;&lt;head&gt;
</span><br>
<span class="quotelev1">&gt; &lt;title&gt;401 Authorization Required&lt;/title&gt;
</span><br>
<span class="quotelev1">&gt; &lt;/head&gt;&lt;body&gt;
</span><br>
<span class="quotelev1">&gt; &lt;h1&gt;Authorization Required&lt;/h1&gt;
</span><br>
<span class="quotelev1">&gt; &lt;p&gt;This server could not verify that you
</span><br>
<span class="quotelev1">&gt; are authorized to access the document
</span><br>
<span class="quotelev1">&gt; requested. Either you supplied the wrong
</span><br>
<span class="quotelev1">&gt; credentials (e.g., bad password), or your
</span><br>
<span class="quotelev1">&gt; browser doesn't understand how to supply
</span><br>
<span class="quotelev1">&gt; the credentials required.&lt;/p&gt;
</span><br>
<span class="quotelev1">&gt; &lt;hr&gt;
</span><br>
<span class="quotelev1">&gt; &lt;address&gt;Apache Server at www.open-mpi.org Port 443&lt;/address&gt;
</span><br>
<span class="quotelev1">&gt; &lt;/body&gt;&lt;/html&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to open <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a> and <a href="https://www.open-mpi.org:443/mtt/submit/">https://www.open-mpi.org:443/mtt/submit/</a> 
</span><br>
<span class="quotelev1">&gt; . Account/password is required. But I also failed to login in. Does  
</span><br>
<span class="quotelev1">&gt; MTT database use different account?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wen Hao Wang
</span><br>
<span class="quotelev1">&gt; Email: wangwhao_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0536.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>Previous message:</strong> <a href="0534.php">Josh Hursey: "Re: [MTT users] MTT server side problem"</a>
<li><strong>In reply to:</strong> <a href="0532.php">Wen Hao Wang: "[MTT users] Fail to run MTT, maybe authorization failure"</a>
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
