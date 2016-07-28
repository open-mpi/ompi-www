<?
$subject_val = "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 11:45:45 2011" -->
<!-- isoreceived="20110228164545" -->
<!-- sent="Mon, 28 Feb 2011 11:45:40 -0500" -->
<!-- isosent="20110228164540" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun error: &amp;quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&amp;quot;" -->
<!-- id="084E8D9B-A661-4158-BA34-CDE0130AEF8E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=bNVFwDSO-NcHAnyC04vp+8MTjLtBfyKXsbLHj_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 11:45:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15760.php">Jagga Soorma: "[OMPI users] RDMACM Differences"</a>
<li><strong>Previous message:</strong> <a href="15758.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>In reply to:</strong> <a href="15755.php">swagat mishra: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More specifically -- ensure that LD_LIBRARY_PATH is set properly *on all nodes where you are running Open MPI processes*.
<br>
<p>For example, if you're using a hostfile to launch across multiple machines, ensure that your shell startup files (e.g., .bashrc) are setup to set your LD_LIBRARY_PATH properly, even for non-interactive logins.
<br>
<p><p>On Feb 27, 2011, at 4:49 PM, swagat mishra wrote:
<br>
<p><span class="quotelev1">&gt; you need to set up LD_LIBRARY_PATH to point to the folder where your shared libraries are located
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/library/folder
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 28, 2011 at 3:03 AM, Sonyx Wonda &lt;sonyx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am a newbie to openmpi and I am having some trouble running openmpi programs. 
</span><br>
<span class="quotelev1">&gt; I downloaded and installed the latest version from the web site (openmpi-1.4.3) and the whole process completed successfully. Both ./configure and make all install commands were successful. I am able to compile open-mpi codes (using mpicc and mpiCC) as I did with the example files provided within the source package, but I have a problem when it comes to actually running the executable created. For example, when I tried to run the &quot;hello world&quot; program using: mpirun -np 2 ./hello_c I got the following output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hello_c: error while loading shared libraries: libopen-rte.so.0: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I did find the libopen-rte.so.0 file in the /usr/local/lib/ folder)
</span><br>
<span class="quotelev1">&gt; I have tried re-installing but this doesn't seem to work.
</span><br>
<span class="quotelev1">&gt; I use Linux Mandriva 2007 with the bash shell. The attached compressed folder contains the config.log file and the output from the ompi_info --all command (ompi_info.out), and below is the value of the $PATH environment variable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /sbin:/usr/sbin:/bin:/usr/bin:/usr/X11R6/bin:/usr/local/bin:/usr/local/sbin:/usr/lib/qt3//bin:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your help.
</span><br>
<span class="quotelev1">&gt; Regards.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15760.php">Jagga Soorma: "[OMPI users] RDMACM Differences"</a>
<li><strong>Previous message:</strong> <a href="15758.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>In reply to:</strong> <a href="15755.php">swagat mishra: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
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
