<?
$subject_val = "Re: [OMPI users] bug in ompi-restart";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 09:45:42 2009" -->
<!-- isoreceived="20090519134542" -->
<!-- sent="Tue, 19 May 2009 09:45:37 -0400" -->
<!-- isosent="20090519134537" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in ompi-restart" -->
<!-- id="A4026409-549D-4B63-8BDA-B2C54EC3F885_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A0C4BB4.1060401_at_inrialpes.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] bug in ompi-restart<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 09:45:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9386.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9384.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9341.php">Bouguerra mohamed slim: "[OMPI users] bug in ompi-restart"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Currently ompi-restart does not know how to deal with an absolute or  
<br>
relative path in the command line argument for the global snapshot  
<br>
handle. It will always prepend the value of the MCA parameter:
<br>
snapc_base_global_snapshot_dir
<br>
Which defaults to $HOME.
<br>
<p>So what you are seeing is (currently) to be expected. If you set the  
<br>
MCA parameter to the path you are trying for as an argument to ompi- 
<br>
restart then it should work (something like the below):
<br>
ompi-restart -mca snapc_base_global_snapshot_dir $HOME  
<br>
ompi_global_snapshot_7056.ckpt
<br>
<p>I opened a bug to add this capability to orte-restart. You can track  
<br>
it at the link below:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1924">https://svn.open-mpi.org/trac/ompi/ticket/1924</a>
<br>
<p>I am not 100% sure when I will have a chance to get to it, but  
<br>
hopefully in the next few weeks.
<br>
<p>As a side note, if you want to move the global snapshot directory to  
<br>
another location you will need to update the  
<br>
'global_snapshot_meta.data' file located at the root of the global  
<br>
snapshot directory to reflect the path changes for the 'Snapshot  
<br>
Location:' key.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On May 14, 2009, at 12:49 PM, Bouguerra mohamed slim wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I think that there is a problem with the ompi-restart   from the  
</span><br>
<span class="quotelev1">&gt; release r-21197.
</span><br>
<span class="quotelev1">&gt; in fact ompi-restart can restart only if the checkpoint directory  
</span><br>
<span class="quotelev1">&gt; is  $HOME.
</span><br>
<span class="quotelev1">&gt; For example the checkpoint folder is $HOME.
</span><br>
<span class="quotelev1">&gt; if i try ompi-restart -i  $HOME/ompi_global_snapshot_7056.ckpt/  it  
</span><br>
<span class="quotelev1">&gt; doesn't work and i get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msbouguerra_at_sol-5:~$ ompi-restart -i $HOME/ 
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_7056.ckpt/
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The filename (/home/grenoble/msbouguerra/ 
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_7056.ckpt/) is invalid because either you have  
</span><br>
<span class="quotelev1">&gt; not provided a filename
</span><br>
<span class="quotelev1">&gt;      or provided an invalid filename.
</span><br>
<span class="quotelev1">&gt;      Please see --help for usage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and when i try :   ompi-restart -i  
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_7056.ckpt/    it works  and i get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msbouguerra_at_sol-5:~$ ompi-restart -i ompi_global_snapshot_7056.ckpt/
</span><br>
<span class="quotelev1">&gt; [sol-5.sophia.grid5000.fr:07466] Sequences: 1
</span><br>
<span class="quotelev1">&gt; [sol-5.sophia.grid5000.fr:07466] Seq: 0
</span><br>
<span class="quotelev1">&gt; [sol-5.sophia.grid5000.fr:07466] Begin Timestamp: Thu May 14  
</span><br>
<span class="quotelev1">&gt; 18:23:00 2009
</span><br>
<span class="quotelev1">&gt; [sol-5.sophia.grid5000.fr:07466] OPAL CRS Component: blcr
</span><br>
<span class="quotelev1">&gt; [sol-5.sophia.grid5000.fr:07466] Snapshot Reference:  
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_7056.ckpt/
</span><br>
<span class="quotelev1">&gt; [sol-5.sophia.grid5000.fr:07466] Snapshot Location: /home/grenoble/ 
</span><br>
<span class="quotelev1">&gt; msbouguerra/ompi_global_snapshot_7056.ckpt
</span><br>
<span class="quotelev1">&gt; [sol-5.sophia.grid5000.fr:07466] End Timestamp: Thu May 14 18:23:00  
</span><br>
<span class="quotelev1">&gt; 2009
</span><br>
<span class="quotelev1">&gt; [sol-5.sophia.grid5000.fr:07466] Processes: 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; msbouguerra_at_sol-5:~$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So when i use another folder as checkpoint directory the restart  
</span><br>
<span class="quotelev1">&gt; failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Cordialement,
</span><br>
<span class="quotelev1">&gt; Mohamed-Slim BOUGUERRA    PhD student INRIA-Grenoble / Projet MOAIS
</span><br>
<span class="quotelev1">&gt; ENSIMAG - antenne de Montbonnot
</span><br>
<span class="quotelev1">&gt; ZIRST 51, avenue Jean Kuntzmann
</span><br>
<span class="quotelev1">&gt; 38330 MONTBONNOT SAINT MARTIN France
</span><br>
<span class="quotelev1">&gt; Tel :+33 (0)4 76 61 20 79
</span><br>
<span class="quotelev1">&gt; Fax :+33 (0)4 76 61 20 99
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
<li><strong>Next message:</strong> <a href="9386.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9384.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9341.php">Bouguerra mohamed slim: "[OMPI users] bug in ompi-restart"</a>
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
