<?
$subject_val = "Re: [OMPI users] hostname not known only in fedora 15";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 19 09:21:52 2012" -->
<!-- isoreceived="20120419132152" -->
<!-- sent="Thu, 19 Apr 2012 09:21:35 -0400" -->
<!-- isosent="20120419132135" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hostname not known only in fedora 15" -->
<!-- id="6D3AFD43-FB8E-4FA2-A6BE-D35AC6BCD7D5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F8FEC1D.40803_at_meduniwien.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] hostname not known only in fedora 15<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-19 09:21:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19055.php">Bernhard Knapp: "Re: [OMPI users] hostname not known only in fedora 15"</a>
<li><strong>Previous message:</strong> <a href="19053.php">Jeffrey Squyres: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="19048.php">Bernhard Knapp: "[OMPI users] hostname not known only in fedora 15"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19055.php">Bernhard Knapp: "Re: [OMPI users] hostname not known only in fedora 15"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What happens if you &quot;dig quoVadis27&quot;?
<br>
<p>If you don't get a valid answer back, then it's not a resolvable name.
<br>
<p><p>On Apr 19, 2012, at 6:42 AM, Bernhard Knapp wrote:
<br>
<p><span class="quotelev1">&gt; Dear mail-list users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a problem when I try to run a parallel gromacs job on fedora core 15. The same job (same installation options and network-setup) for fedora core 13 works fine. I already tried it in a fedora forum but I could not find a solution there ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [terminal output start]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [name_at_quoVadis27 folder]$ mpirun -np 4 mdrun [...] : Could not resolve hostname quoVadis27: Name or service not known
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 9722) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [terminal output end]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It claims that &quot;quoVadis27&quot; is not known however this is just the name of the maschine itself:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [terminal output start]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [name_at_quoVadis27 ~]$ hostname
</span><br>
<span class="quotelev1">&gt; quoVadis27
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [name_at_quoVadis27 ~]$ cat /etc/resolv.conf
</span><br>
<span class="quotelev1">&gt; # Generated by NetworkManager
</span><br>
<span class="quotelev1">&gt; nameserver 192.168.0.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [name_at_quoVadis27 ~]$ cat /etc/hosts
</span><br>
<span class="quotelev1">&gt; 127.0.0.1               localhost.localdomain localhost
</span><br>
<span class="quotelev1">&gt; ::1             localhost6.localdomain6 localhost6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [terminal output end]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also the LD_LIBRARY_PATH is set in the bash.rc: export LD_LIBRARY_PATH=&quot;/usr/local/lib&quot; .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas how to solve this problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; best,
</span><br>
<span class="quotelev1">&gt; Bernhard
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19055.php">Bernhard Knapp: "Re: [OMPI users] hostname not known only in fedora 15"</a>
<li><strong>Previous message:</strong> <a href="19053.php">Jeffrey Squyres: "Re: [OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>In reply to:</strong> <a href="19048.php">Bernhard Knapp: "[OMPI users] hostname not known only in fedora 15"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19055.php">Bernhard Knapp: "Re: [OMPI users] hostname not known only in fedora 15"</a>
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
