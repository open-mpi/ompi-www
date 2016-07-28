<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  2 05:11:08 2007" -->
<!-- isoreceived="20071002091108" -->
<!-- sent="Tue, 02 Oct 2007 02:11:02 -0700" -->
<!-- isosent="20071002091102" -->
<!-- name="Sebastian Schulz" -->
<!-- email="shamoha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with 'orted'" -->
<!-- id="51D53E5D-0115-1000-8E90-8E592D861223-Webmail-10010_at_mac.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="547db2260710012228x3a4fadbbr6e6a2d1042ea9483_at_mail.gmail.com" -->
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
<strong>From:</strong> Sebastian Schulz (<em>shamoha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-02 05:11:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4131.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4129.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>In reply to:</strong> <a href="4128.php">Amit Kumar Saha: "Re: [OMPI users] problem with 'orted'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4137.php">Amit Kumar Saha: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Reply:</strong> <a href="4137.php">Amit Kumar Saha: "Re: [OMPI users] problem with 'orted'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Amit Kumar Saha wrote:
<br>
<span class="quotelev1">&gt; what i find bizarre is that I used Open MPI 1.2.3 to install on all my
</span><br>
<span class="quotelev1">&gt; 4 machines. whereas, 'orted' is installed in /usr/local/bin on all the
</span><br>
<span class="quotelev1">&gt; other 3 machines, the 4th machine which is giving me trouble has got
</span><br>
<span class="quotelev1">&gt; it installed in '/usr/bin' . Yes, 'orted' is accessible from a ssh
</span><br>
<span class="quotelev1">&gt; login as well.
</span><br>
<p>Note that on Ubuntu (at least on 7.04) the default ~/.bashrc contains the following line:
<br>
&nbsp;
<br>
# If not running interactively, don't do anything
<br>
[ -z &quot;$PS1&quot; ] &amp;&amp; return  
<br>
<p>This results in different behavior of 'ssh somehost command' and 'ssh somehost' followed by 'command'.
<br>
So if your want to control PATH from .bashrc, make sure you delete this line.
<br>
<p>This would explain why orted is found in an interactive shell while ompi startup can't find it. The strange thing is, that /usr/bin/orted is not found while /usr/local/bin/orted is. Usually /usr/bin is always in Ubuntu's PATH ...
<br>
<p>Regards 
<br>
Sebastian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4131.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4129.php">Dino Rossegger: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>In reply to:</strong> <a href="4128.php">Amit Kumar Saha: "Re: [OMPI users] problem with 'orted'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4137.php">Amit Kumar Saha: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Reply:</strong> <a href="4137.php">Amit Kumar Saha: "Re: [OMPI users] problem with 'orted'"</a>
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
