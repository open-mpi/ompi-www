<?
$subject_val = "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 14:27:08 2007" -->
<!-- isoreceived="20071218192708" -->
<!-- sent="Tue, 18 Dec 2007 14:26:40 -0500" -->
<!-- isosent="20071218192640" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?" -->
<!-- id="75AD9D94-FC52-4AF6-9C74-0D563D33950A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1197994325.12495.22.camel_at_nb-sbrighi.cineca.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-18 14:26:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4718.php">Terry Frankcombe: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4716.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4701.php">Marco Sbrighi: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 18, 2007, at 11:12 AM, Marco Sbrighi wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Assumedly this(these) statement(s) are in a config file that is being
</span><br>
<span class="quotelev2">&gt;&gt; read by Open MPI, such as $HOME/.openmpi/mca-params.conf?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried many combinations: only in $HOME/.openmpi/mca-params.conf,
</span><br>
<span class="quotelev1">&gt; only in command line and both; but none seems to work correctly.
</span><br>
<span class="quotelev1">&gt; Nevertheless, what I'm expecting is that if something is specified in
</span><br>
<span class="quotelev1">&gt; $HOME/.openmpi/mca-params.conf, then if differently specified in  
</span><br>
<span class="quotelev1">&gt; command
</span><br>
<span class="quotelev1">&gt; line, the last should be assumed, I think.
</span><br>
<p>The only difference in putting values in these locations should be the  
<br>
order of precedence in which they are read.  As you stated, values on  
<br>
the command line override everything else.  See <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a> 
<br>
.
<br>
<p><span class="quotelev2">&gt;&gt; Yes, it does.  Specifying the MCA same param twice on the command  
</span><br>
<span class="quotelev2">&gt;&gt; line
</span><br>
<span class="quotelev2">&gt;&gt; results in undefined behavior -- it will only take one of them, and I
</span><br>
<span class="quotelev2">&gt;&gt; assume it'll take the first (but I'd have to check the code to be  
</span><br>
<span class="quotelev2">&gt;&gt; sure).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, I can obtain the same behaviour using only one statement:
</span><br>
<span class="quotelev1">&gt; --mca oob_tcp_include eth1,lo,eth0,ib0,ib1
</span><br>
<p>FWIW, I traced the history of this code -- it looks like it dates all  
<br>
the way back to LAM/MPI, where if you specify &quot;--mca foo bar --mca foo  
<br>
yow&quot;, then foo will get the value &quot;bar,yow&quot;.  So it *is* intended  
<br>
(albeit undocumented!) behavior.  Who knew!  :-)
<br>
<p><span class="quotelev1">&gt; note that using  --mca mpi_show_mca_params what I'm seeing in the  
</span><br>
<span class="quotelev1">&gt; report
</span><br>
<span class="quotelev1">&gt; is the same for both statements (twice and single):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; [node255:30188] oob_tcp_debug=0
</span><br>
<span class="quotelev1">&gt; [node255:30188] oob_tcp_include=eth1,lo,eth0,ib0,ib1
</span><br>
<span class="quotelev1">&gt; [node255:30188] oob_tcp_exclude=
</span><br>
<span class="quotelev1">&gt; .......
</span><br>
<p>So far, this is all consistent and expected.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Could you try with 1.2.3 or 1.2.4 (1.2.4 is the most recent; 1.2.5  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; due out &quot;soon&quot; -- it *may* get out before the holiday break, but no
</span><br>
<span class="quotelev2">&gt;&gt; promises...)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we have 1.2.3 in another cluster and it performs the same behaviour as
</span><br>
<span class="quotelev1">&gt; 1.2.2 .... (BTW the other cluster has the same eth ifaces)
</span><br>
<p>Crud.
<br>
<p><span class="quotelev2">&gt;&gt; If you can't upgrade, let me know and I can provide a debugging patch
</span><br>
<span class="quotelev2">&gt;&gt; that will give us a little more insight into what is happening on  
</span><br>
<span class="quotelev2">&gt;&gt; your
</span><br>
<span class="quotelev2">&gt;&gt; machines.  Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is quite difficult for us to upgrade the open-mpi now. We have the
</span><br>
<span class="quotelev1">&gt; official CISCO packages installed, and I know the 1.2.2-1 is the only
</span><br>
<span class="quotelev1">&gt; official CISCO's open-mpi distribution today ....
</span><br>
<p><p>Here's a patch to the OMPI 1.2.2 source that adds some printf's in the  
<br>
OOB TCP interface selection logic that should show exactly what each  
<br>
process decides.  You should be able to run this with as few as 2  
<br>
processes to see what the decision-making process is for each of them.
<br>
<p>11:24] svbu-mpi:/home/jsquyres/openmpi-1.2.2 % diff -u orte/mca/oob/ 
<br>
tcp/oob_tcp.c.orig orte/mca/oob/tcp/oob_tcp.c
<br>
--- orte/mca/oob/tcp/oob_tcp.c.orig	2007-12-18 11:21:08.000000000 -0800
<br>
+++ orte/mca/oob/tcp/oob_tcp.c	2007-12-18 11:22:29.000000000 -0800
<br>
@@ -1344,11 +1344,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char name[32];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_ifindextoname(i, name, sizeof(name));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mca_oob_tcp_component.tcp_include != NULL &amp;&amp;
<br>
-            strstr(mca_oob_tcp_component.tcp_include,name) == NULL)
<br>
+            strstr(mca_oob_tcp_component.tcp_include,name) == NULL) {
<br>
+            opal_output(0, &quot;TCP OOB skipping %s because it's not in  
<br>
include (%s)\n&quot;, name, mca_oob_tcp_component.tcp_include);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
+        }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mca_oob_tcp_component.tcp_exclude != NULL &amp;&amp;
<br>
-            strstr(mca_oob_tcp_component.tcp_exclude,name) != NULL)
<br>
+            strstr(mca_oob_tcp_component.tcp_exclude,name) != NULL) {
<br>
+            opal_output(0, &quot;TCP OOB skipping %s because it's in  
<br>
exclude (%s)\n&quot;, name, mca_oob_tcp_component.tcp_exclude);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
+        }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_ifindextoaddr(i, (struct sockaddr*)&amp;addr, sizeof(addr));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(opal_ifcount() &gt; 1 &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_ifislocalhost((struct sockaddr*) &amp;addr))
<br>
@@ -1356,6 +1360,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(ptr != contact_info) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ptr += sprintf(ptr, &quot;;&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+        opal_output(0, &quot;TCP OOB adding interface: %s\n&quot;, name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ptr += sprintf(ptr, &quot;tcp://%s:%d&quot;, inet_ntoa(addr.sin_addr),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ntohs(mca_oob_tcp_component.tcp_listen_port));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>I attached the patch as well in case my mail client / the mailing list  
<br>
munges it.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems


</pre>
<p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4717/ompi-1.2.2-oob-tcp-verbose.patch">ompi-1.2.2-oob-tcp-verbose.patch</a>
</ul>
<!-- attachment="ompi-1.2.2-oob-tcp-verbose.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4718.php">Terry Frankcombe: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4716.php">Ralph H Castain: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4701.php">Marco Sbrighi: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
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
