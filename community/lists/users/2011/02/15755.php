<?
$subject_val = "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 27 16:49:49 2011" -->
<!-- isoreceived="20110227214949" -->
<!-- sent="Mon, 28 Feb 2011 03:19:43 +0530" -->
<!-- isosent="20110227214943" -->
<!-- name="swagat mishra" -->
<!-- email="swagatmishra2007_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun error: &amp;quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&amp;quot;" -->
<!-- id="AANLkTi=bNVFwDSO-NcHAnyC04vp+8MTjLtBfyKXsbLHj_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="684290.76980.qm_at_web36807.mail.mud.yahoo.com" -->
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
<strong>From:</strong> swagat mishra (<em>swagatmishra2007_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-27 16:49:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15756.php">Brice Goglin: "[OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Previous message:</strong> <a href="15754.php">Sonyx Wonda: "[OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<li><strong>In reply to:</strong> <a href="15754.php">Sonyx Wonda: "[OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15759.php">Jeff Squyres: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<li><strong>Reply:</strong> <a href="15759.php">Jeff Squyres: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
you need to set up LD_LIBRARY_PATH to point to the folder where your shared
<br>
libraries are located
<br>
LD_LIBRARY_PATH=/usr/local/library/folder
<br>
<p>On Mon, Feb 28, 2011 at 3:03 AM, Sonyx Wonda &lt;sonyx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a newbie to openmpi and I am having some trouble running openmpi
</span><br>
<span class="quotelev1">&gt; programs.
</span><br>
<span class="quotelev1">&gt; I downloaded and installed the latest version from the web site (
</span><br>
<span class="quotelev1">&gt; openmpi-1.4.3) and the whole process completed successfully. Both
</span><br>
<span class="quotelev1">&gt; ./configure and make all install commands were successful. I am able to
</span><br>
<span class="quotelev1">&gt; compile open-mpi codes (using mpicc and mpiCC) as I did with the example
</span><br>
<span class="quotelev1">&gt; files provided within the source package, but I have a problem when it comes
</span><br>
<span class="quotelev1">&gt; to actually running the executable created. For example, when I tried to run
</span><br>
<span class="quotelev1">&gt; the &quot;hello world&quot; program using: mpirun -np 2 ./hello_c I got the
</span><br>
<span class="quotelev1">&gt; following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hello_c: error while loading shared libraries: libopen-rte.so.0: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I did find the libopen-rte.so.0 file in the /usr/local/lib/ folder)
</span><br>
<span class="quotelev1">&gt; I have tried re-installing but this doesn't seem to work.
</span><br>
<span class="quotelev1">&gt; I use Linux Mandriva 2007 with the bash shell. The attached compressed
</span><br>
<span class="quotelev1">&gt; folder contains the config.log file and the output from the ompi_info
</span><br>
<span class="quotelev1">&gt; --all command (ompi_info.out), and below is the value of the $PATH
</span><br>
<span class="quotelev1">&gt; environment variable
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15755/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15756.php">Brice Goglin: "[OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Previous message:</strong> <a href="15754.php">Sonyx Wonda: "[OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<li><strong>In reply to:</strong> <a href="15754.php">Sonyx Wonda: "[OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15759.php">Jeff Squyres: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
<li><strong>Reply:</strong> <a href="15759.php">Jeff Squyres: "Re: [OMPI users] mpirun error: &quot;error while loading shared libraries: libopen-rte.so.0: cannot open shared object file:&quot;"</a>
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
