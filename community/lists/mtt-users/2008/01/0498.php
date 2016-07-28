<?
$subject_val = "Re: [MTT users] 'whatami' patch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 13:33:13 2008" -->
<!-- isoreceived="20080129183313" -->
<!-- sent="Tue, 29 Jan 2008 13:32:46 -0500" -->
<!-- isosent="20080129183246" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] 'whatami' patch" -->
<!-- id="9452E150-F66B-469D-8B39-847D0E18B8D3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="479F68E8.4040600_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [MTT users] 'whatami' patch<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 13:32:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0499.php">Jeff Squyres: "Re: [MTT users] 'whatami' patch"</a>
<li><strong>Previous message:</strong> <a href="0497.php">Tim Prins: "[MTT users] 'whatami' patch"</a>
<li><strong>In reply to:</strong> <a href="0497.php">Tim Prins: "[MTT users] 'whatami' patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0499.php">Jeff Squyres: "Re: [MTT users] 'whatami' patch"</a>
<li><strong>Reply:</strong> <a href="0499.php">Jeff Squyres: "Re: [MTT users] 'whatami' patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!
<br>
<p>I slightly modified your patch to just update the existing rhel regexp  
<br>
and it seems to work for me (rhel4, rhel5); see attached if you care.   
<br>
I'll commit this to both the mtt trunk and core branch, and will pass  
<br>
it on to the whatami maintainers.
<br>
<p><p>On Jan 29, 2008, at 12:56 PM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 'whatami' script does not recognize our new cluster. Attached is  
</span><br>
<span class="quotelev1">&gt; a patch to make it work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For reference, the relevant line in /etc/issue is:
</span><br>
<span class="quotelev1">&gt; Red Hat Enterprise Linux Server release 5 (Tikanga)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; Index: client/whatami/whatami
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- client/whatami/whatami	(revision 1142)
</span><br>
<span class="quotelev1">&gt; +++ client/whatami/whatami	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -189,6 +189,10 @@
</span><br>
<span class="quotelev1">&gt;                         #distro=${distro_brand}${distro_version}_$ 
</span><br>
<span class="quotelev1">&gt; {sub_distro}
</span><br>
<span class="quotelev1">&gt;                         distro=${distro_brand}${distro_version}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +                elif [ -n &quot;`egrep 'Red Hat Enterprise Linux Server  
</span><br>
<span class="quotelev1">&gt; release [0-9]*' /etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt; +                        distro_brand=rhel_server
</span><br>
<span class="quotelev1">&gt; +                        distro_version=`grep 'Red Hat' /etc/issue |  
</span><br>
<span class="quotelev1">&gt; sed -e 's/Red Hat Enterprise Linux Server release \([0-9]*\).*/\1/' `
</span><br>
<span class="quotelev1">&gt; +                        distro=${distro_brand}${distro_version}
</span><br>
<span class="quotelev1">&gt;                 elif [ -n &quot;`egrep 'Cray Rocks Linux release 1.3' / 
</span><br>
<span class="quotelev1">&gt; etc/issue`&quot; ]; then
</span><br>
<span class="quotelev1">&gt;                         distro=rh73
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0499.php">Jeff Squyres: "Re: [MTT users] 'whatami' patch"</a>
<li><strong>Previous message:</strong> <a href="0497.php">Tim Prins: "[MTT users] 'whatami' patch"</a>
<li><strong>In reply to:</strong> <a href="0497.php">Tim Prins: "[MTT users] 'whatami' patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0499.php">Jeff Squyres: "Re: [MTT users] 'whatami' patch"</a>
<li><strong>Reply:</strong> <a href="0499.php">Jeff Squyres: "Re: [MTT users] 'whatami' patch"</a>
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
