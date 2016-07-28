<?
$subject_val = "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 13 13:32:07 2012" -->
<!-- isoreceived="20121113183207" -->
<!-- sent="Tue, 13 Nov 2012 19:31:58 +0100" -->
<!-- isosent="20121113183158" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH" -->
<!-- id="62D520F9-927E-45F4-912E-6DF06B54A8B3_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F848764A-AF82-4E62-AD4A-9873CD8AC42B_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-13 13:31:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20715.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="20713.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="20713.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20716.php">Zbigniew Koza: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 13.11.2012 um 19:26 schrieb huaibao zhang:
<br>
<p><span class="quotelev1">&gt; Hi Reuti, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your answer. I really appreciate it.
</span><br>
<span class="quotelev1">&gt; I am using an old version 1.4.3. for my code. If I only type $./configure,  it will compile
</span><br>
<p>Well, it will &quot;configure&quot;, but afterwards you need `make` and `make install`. If you are not the root user, you will likely prefer to install it in your own home directory with options like:
<br>
<p>$ ./configure --prefix=$HOME/local/openmpi-1.4.3
<br>
$ make
<br>
$ make install
<br>
<p>Any reason not to use the latest version?
<br>
<p>-- Reuti
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; , but I have no idea where it is installed. I typed $ find /lib -name &quot;libopen-pal.so.0&quot;, but it shows nothing. Do you thinks it is caused since I am not a root user or the old version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Huaibao (Paul) Zhang
</span><br>
<span class="quotelev1">&gt; Gas Surface Interactions Lab
</span><br>
<span class="quotelev1">&gt; Department of Mechanical Engineering
</span><br>
<span class="quotelev1">&gt; University of Kentucky,
</span><br>
<span class="quotelev1">&gt; Lexington, KY, 40506-0503
</span><br>
<span class="quotelev1">&gt; Office: 216 Ralph G. Anderson Building
</span><br>
<span class="quotelev1">&gt; Web:gsil.engineering.uky.edu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 13, 2012, at 12:24 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 13.11.2012 um 15:44 schrieb huaibao zhang:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed OpenMPI on my Ubuntu 64 bit desktop. At first, I did not specify &quot;prefix&quot;, so even I've installed it. I could not find where it is. Since the &quot;PATH&quot; and &quot;LD&quot; have to be given, the mpicc can find the &quot;lib open-pal.so.0&quot; file. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You mean &quot;...can't find...&quot;? If you use the default location, it should have the correct settings already even without adding any path to PATH or LD_LIBRARY_PATH.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can use:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ find /lib -name &quot;libopen-pal.so.0&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; to spot the location. But I wonder about the version. The actual one seems to be libopen-pal.so.4 -&gt; libopen-pal.so.4.0.3 - which version are you using?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20715.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="20713.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="20713.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20716.php">Zbigniew Koza: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
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
