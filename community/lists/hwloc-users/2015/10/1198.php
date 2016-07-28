<?
$subject_val = "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 03:13:57 2015" -->
<!-- isoreceived="20151027071357" -->
<!-- sent="Tue, 27 Oct 2015 08:13:51 +0100 (CET)" -->
<!-- isosent="20151027071351" -->
<!-- name="vlcek_at_[hidden]" -->
<!-- email="vlcek_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family" -->
<!-- id="2Ve.fgaa.16mTfjtyoiS.1MBoGl_at_seznam.cz" -->
<!-- charset="utf-8" -->
<!-- inreplyto="55DB1CDC.1070105_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family<br>
<strong>From:</strong> <a href="mailto:vlcek_at_[hidden]?Subject=Re:%20[hwloc-users]%20hwloc%20error%20for%20AMD%20Opteron%206300%20processor%20family"><em>vlcek_at_[hidden]</em></a><br>
<strong>Date:</strong> 2015-10-27 03:13:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1199.php">Ondřej Vlček: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1197.php">Brice Goglin: "[hwloc-users] hwloc tutorial @ EuroMPI - Sept 21st"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1196.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1199.php">Ondřej Vlček: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Brice,
&#194;&#160; thank you for your answer. Neither upgrade of BIOS nor using the latest 
hwloc helped. Finaly we contacted AMD and they fixed a bug in kernel which 
coused problems with 12-core AMD processors. They should upstream the 
changes to kernel.org soon, so that all the distros (Centos,RHEL,SUSE etc.) 
can pick them up automatically as they create their respective next 
releases.

Ondrej



---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------
Od: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
Komu: Ondrej Certik &lt;ondrej_at_[hidden]&gt;
Datum: 24. 8. 2015 15:32:33
P&#197;&#153;edm&#196;&#155;t: Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family

&quot;

Hello,

hwloc 1.7 is very old, I am surprised CentOS 7 doesn't have anything more 
recent, maybe not in &quot;standard&quot; packages?

Anyway, this is a very common error on AMD 6200 and 6300 machines.
See <a href="http://www.open-mpi.org/projects/hwloc/doc/v1.11.0/a00030.php#faq_os">http://www.open-mpi.org/projects/hwloc/doc/v1.11.0/a00030.php#faq_os</a>_
error
(<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.11.0/a00030.php#faq_os_error">http://www.open-mpi.org/projects/hwloc/doc/v1.11.0/a00030.php#faq_os_error</a>)
Assuming you kernel isn't too old (CentOS7 should be fine), you should try 
to upgrade the BIOS.

Brice


Le 24/08/2015 15:06, Ond&#197;&#153;ej Vl&#196;&#141;ek a &#195;&#169;crit&#194;&#160;:
 
&quot; 
Dear all,
  I have encountered hwloc error for the AMD Opteron 6300 processor family 
(see below). I am using hwloc.x86_64 v1.7-3.el7, which is its latest version 
available in standard packages for CentOS 7. Is this something, what has been 
already encountered and fixed in newer versions of hwloc? Output from the 
hwloc-gather-topology.sh script is attached.

Thank you.
Ondrej Vlcek

$ hwloc-info
****************************************************************************
* Hwloc has encountered what looks like an error from the operating system.
*
* object (L3 cpuset 0x000003f0) intersection without inclusion!
* Error occurred in topology.c line 753
*
* Please report this error message to the hwloc user's mailing list,
* along with the output from the hwloc-gather-topology.sh script.
****************************************************************************
depth 0:        1 Machine (type #1)
 depth 1:       4 Socket (type #3)
  depth 2:      8 NUMANode (type #2)
   depth 3:     8 L3Cache (type #4)
    depth 4:    24 L2Cache (type #4)
     depth 5:   24 L1iCache (type #4)
      depth 6:  48 L1dCache (type #4)
       depth 7: 48 Core (type #5)
        depth 8:        48 PU (type #6)
Special depth -3:       4 Bridge (type #9)
Special depth -4:       6 PCI Device (type #10)
Special depth -5:       9 OS Device (type #11)



_______________________________________________
hwloc-users mailing list
&lt;a href='mailto:hwloc-users_at_[hidden]'&gt;hwloc-users_at_[hidden]&lt;/a&gt;
Subscription: &lt;a href='<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>'&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a</a>&gt;
Link to this post: &lt;a href='<a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1196.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1196.php</a>'&gt;<a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1196.php</a">http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1196.php</a</a>&gt;
&quot; 

_______________________________________________
hwloc-users mailing list
hwloc-users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/">http://www.open-mpi.org/community/lists/hwloc-users/2015/</a>
08/1197.php&quot;--=_663993631afc30573addf96f+e47dca-67f1-53c0-9ded-96eee2c78a73_Content-Type: text/html;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;charset=utf-8
<br>
Content-Transfer-Encoding: quoted-printable
<br>
<p>&lt;html&gt;&lt;body&gt;Dear Brice,&lt;br&gt;&amp;nbsp; thank you for your answer. Neither upgrade of BIOS nor using the latest hwloc helped. Finaly we contacted AMD and they fixed a bug in kernel which coused problems with 12-core AMD processors. They should upstream the changes to kernel.org soon, so that all the distros (Centos,RHEL,SUSE etc.) can pick them up automatically as they create their respective next releases.&lt;br&gt;&lt;br&gt;Ondrej&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;p&gt;---------- P&#197;&#175;vodn&#195;&#173; zpr&#195;&#161;va ----------&lt;br&gt;Od: Brice Goglin &amp;lt;Brice.Goglin_at_[hidden]&amp;gt;&lt;br&gt;Komu: Ondrej Certik &amp;lt;ondrej_at_[hidden]&amp;gt;&lt;br&gt;Datum: 24. 8. 2015 15:32:33&lt;br&gt;P&#197;&#153;edm&#196;&#155;t: Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family&lt;/p&gt;&lt;br&gt;&lt;blockquote&gt;&lt;div style=&quot;color: #000000; background-color: #FFFFFF&quot;&gt;
&lt;div&gt;Hello,&lt;br&gt;
&lt;br&gt;
hwloc 1.7 is very old, I am surprised CentOS 7 doesn't have
anything more recent, maybe not in &quot;standard&quot; packages?&lt;br&gt;
&lt;br&gt;
Anyway, this is a very common error on AMD 6200 and 6300 machines.&lt;br&gt;
See
&lt;a href=&quot;<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.11.0/a00030.php#faq_os_error">http://www.open-mpi.org/projects/hwloc/doc/v1.11.0/a00030.php#faq_os_error</a>&quot;&gt;<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.11.0/a00030.php#faq_os_error</a">http://www.open-mpi.org/projects/hwloc/doc/v1.11.0/a00030.php#faq_os_error</a</a>&gt;&lt;br&gt;
Assuming you kernel isn't too old (CentOS7 should be fine), you
should try to upgrade the BIOS.&lt;br&gt;
&lt;br&gt;
Brice&lt;br&gt;
&lt;br&gt;
&lt;br&gt;
Le 24/08/2015 15:06, Ond&#197;&#153;ej Vl&#196;&#141;ek a &#195;&#169;crit&amp;nbsp;:&lt;br&gt;
&lt;/div&gt;
&lt;blockquote&gt;
&lt;pre&gt;Dear all,
  I have encountered hwloc error for the AMD Opteron 6300 processor family 
(see below). I am using hwloc.x86_64 v1.7-3.el7, which is its latest version 
available in standard packages for CentOS 7. Is this something, what has been 
already encountered and fixed in newer versions of hwloc? Output from the 
hwloc-gather-topology.sh script is attached.

Thank you.
Ondrej Vlcek

$ hwloc-info
****************************************************************************
* Hwloc has encountered what looks like an error from the operating system.
*
* object (L3 cpuset 0x000003f0) intersection without inclusion!
* Error occurred in topology.c line 753
*
* Please report this error message to the hwloc user's mailing list,
* along with the output from the hwloc-gather-topology.sh script.
****************************************************************************
depth 0:        1 Machine (type #1)
 depth 1:       4 Socket (type #3)
  depth 2:      8 NUMANode (type #2)
   depth 3:     8 L3Cache (type #4)
    depth 4:    24 L2Cache (type #4)
     depth 5:   24 L1iCache (type #4)
      depth 6:  48 L1dCache (type #4)
       depth 7: 48 Core (type #5)
        depth 8:        48 PU (type #6)
Special depth -3:       4 Bridge (type #9)
Special depth -4:       6 PCI Device (type #10)
Special depth -5:       9 OS Device (type #11)&lt;/pre&gt;
&lt;br&gt;
 
&lt;br&gt;
&lt;pre&gt;_______________________________________________
hwloc-users mailing list
&lt;a href=&quot;mailto:hwloc-users_at_[hidden]&quot;&gt;hwloc-users_at_[hidden]&lt;/a&gt;
Subscription: &lt;a href=&quot;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>&quot;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a</a>&gt;
Link to this post: &lt;a href=&quot;<a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1196.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1196.php</a>&quot;&gt;<a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1196.php</a">http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1196.php</a</a>&gt;&lt;/pre&gt;
&lt;/blockquote&gt;
&lt;br&gt;
&lt;/div&gt;_______________________________________________&lt;br&gt;hwloc-users mailing list&lt;br&gt;hwloc-users_at_[hidden]&lt;br&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users<br">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users<br</a>&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1197.php</blockquote">http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1197.php</blockquote</a>&gt;&lt;/body&gt;&lt;/html&gt;--=_663993631afc30573addf96f+e47dca-67f1-53c0-9ded-96eee2c78a73_=--
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1199.php">Ondřej Vlček: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1197.php">Brice Goglin: "[hwloc-users] hwloc tutorial @ EuroMPI - Sept 21st"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/08/1196.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1199.php">Ondřej Vlček: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
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
