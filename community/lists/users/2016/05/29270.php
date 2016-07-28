<?
$subject_val = "[OMPI users] problem about mpirun on two nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 23:31:57 2016" -->
<!-- isoreceived="20160522033157" -->
<!-- sent="Sat, 21 May 2016 23:31:56 -0400" -->
<!-- isosent="20160522033156" -->
<!-- name="douraku_at_[hidden]" -->
<!-- email="douraku_at_[hidden]" -->
<!-- subject="[OMPI users] problem about mpirun on two nodes" -->
<!-- id="154d684ebde-7d99-74e9_at_webprd-a78.mail.aol.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] problem about mpirun on two nodes<br>
<strong>From:</strong> <a href="mailto:douraku_at_[hidden]?Subject=Re:%20[OMPI%20users]%20problem%20about%20mpirun%20on%20two%20nodes"><em>douraku_at_[hidden]</em></a><br>
<strong>Date:</strong> 2016-05-21 23:31:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29271.php">dpchoudh .: "[OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<li><strong>Previous message:</strong> <a href="29269.php">Saliya Ekanayake: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29282.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>Reply:</strong> <a href="29282.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>I encountered a problem about mpirun and SSH when using OMPI 1.10.0 compiled with gcc, running on centos7.2.
<br>
When I execute mpirun on my 2 node cluster, I get the following errors pasted below.
<br>
<p><p>[douraku_at_master home]$ mpirun -np 12 a.out
<br>
Permission denied (publickey,gssapi-keyex,gssapi-with-mic).
<br>
--------------------------------------------------------------------------
<br>
ORTE was unable to reliably start one or more daemons.
<br>
This usually is caused by:
<br>
<p>* not finding the required libraries and/or binaries on
<br>
&nbsp;&nbsp;one or more nodes. Please check your PATH and LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;settings, or configure OMPI with --enable-orterun-prefix-by-default
<br>
<p>* lack of authority to execute on one or more specified nodes.
<br>
&nbsp;&nbsp;Please verify your allocation and authorities.
<br>
<p>* the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
<br>
&nbsp;&nbsp;Please check with your sys admin to determine the correct location to use.
<br>
<p>*  compilation of the orted with dynamic libraries when static are required
<br>
&nbsp;&nbsp;(e.g., on Cray). Please check your configure cmd line and consider using
<br>
&nbsp;&nbsp;one of the contrib/platform definitions for your system type.
<br>
<p>* an inability to create a connection back to mpirun due to a
<br>
&nbsp;&nbsp;lack of common network interfaces and/or no route found between
<br>
&nbsp;&nbsp;them. Please check network connectivity (including firewalls
<br>
&nbsp;&nbsp;and network routing requirements).
<br>
--------------------------------------------------------------------------
<br>
<p><p>Here are some information about settings.
<br>
- When only master node is used, this does not happen.
<br>
- opmi is installed in /opt/openmpi-1.10.0/ on the master node.
<br>
- /opt and /home are exported and are nfs mounted on slave node.
<br>
- master and slave and their # of cpu's are written in the openmpi-default-hostfile
<br>
- path to mpi library was confirmed (No doubt, because /home and /opt are shared).
<br>
- password-less login using public key has been configured. So, I can login from master to slave, or slave to master without password. 
<br>
<p>I see similar issues in FAQ on the system consisting of multiple slave nodes, where ssh login is necessary between the slave nodes due to the &quot;tree structure&quot; of ompi. So, I am puzzled why the same issue occur because my system does not have multiple slave nodes (and password less loging was established for both direction).
<br>
I hope I could have some suggestions for solving this issue.
<br>
<p>Many thanks in advance.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29271.php">dpchoudh .: "[OMPI users] How to see the output from OPAL_OUTPUT_VERBOSE?"</a>
<li><strong>Previous message:</strong> <a href="29269.php">Saliya Ekanayake: "Re: [OMPI users] The effect of --bind-to in the presence of PE=N in --map-by"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29282.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>Reply:</strong> <a href="29282.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
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
