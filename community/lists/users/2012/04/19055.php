<?
$subject_val = "Re: [OMPI users] hostname not known only in fedora 15";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 19 10:27:23 2012" -->
<!-- isoreceived="20120419142723" -->
<!-- sent="Thu, 19 Apr 2012 16:27:21 +0200" -->
<!-- isosent="20120419142721" -->
<!-- name="Bernhard Knapp" -->
<!-- email="bernhard.knapp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hostname not known only in fedora 15" -->
<!-- id="4F9020C9.9030008_at_meduniwien.ac.at" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="[OMPI users] hostname not known only in fedora 15" -->
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
<strong>From:</strong> Bernhard Knapp (<em>bernhard.knapp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-19 10:27:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19056.php">George Bosilca: "Re: [OMPI users] send/recv implementation details"</a>
<li><strong>Previous message:</strong> <a href="19054.php">Jeffrey Squyres: "Re: [OMPI users] hostname not known only in fedora 15"</a>
<li><strong>Maybe in reply to:</strong> <a href="19048.php">Bernhard Knapp: "[OMPI users] hostname not known only in fedora 15"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dig returns the following:
<br>
<p>[terminal output start]
<br>
<p>[bknapp_at_quoVadis27 ~]$ dig quoVadis27
<br>
<p>; &lt;&lt;&gt;&gt; DiG 9.8.2rc1-RedHat-9.8.2-0.2.rc1.fc15 &lt;&lt;&gt;&gt; quoVadis27
<br>
;; global options: +cmd
<br>
;; Got answer:
<br>
;; -&gt;&gt;HEADER&lt;&lt;- opcode: QUERY, status: NXDOMAIN, id: 57978
<br>
;; flags: qr rd ra; QUERY: 1, ANSWER: 0, AUTHORITY: 0, ADDITIONAL: 0
<br>
<p>;; QUESTION SECTION:
<br>
;quoVadis27.                    IN      A
<br>
<p>;; Query time: 2 msec
<br>
;; SERVER: 192.168.0.1#53(192.168.0.1)
<br>
;; WHEN: Thu Apr 19 17:16:42 2012
<br>
;; MSG SIZE  rcvd: 28
<br>
<p>[terminal output end]
<br>
<p>If I call &quot;dig&quot; on a different maschine (with fedora core 12 instead of fc 15 but the same network setup and openmpi-install) then I get the following:
<br>
<p><p>&nbsp;&nbsp;[terminal output start]
<br>
<p>[bknapp_at_quoVadis20 ~]$ dig quoVadis20
<br>
<p>; &lt;&lt;&gt;&gt; DiG 9.6.1-P1-RedHat-9.6.1-11.P1.fc12 &lt;&lt;&gt;&gt; quoVadis20
<br>
;; global options: +cmd
<br>
;; Got answer:
<br>
;; -&gt;&gt;HEADER&lt;&lt;- opcode: QUERY, status: NXDOMAIN, id: 62282
<br>
;; flags: qr rd ra; QUERY: 1, ANSWER: 0, AUTHORITY: 0, ADDITIONAL: 0
<br>
<p>;; QUESTION SECTION:
<br>
;quoVadis20.                    IN      A
<br>
<p>;; Query time: 2 msec
<br>
;; SERVER: 192.168.0.1#53(192.168.0.1)
<br>
;; WHEN: Thu Apr 19 17:58:02 2012
<br>
;; MSG SIZE  rcvd: 28
<br>
<p>&nbsp;&nbsp;[terminal output end]
<br>
<p><p>In the case of quoVadis20 open-mpi runs without any problems in the case of quoVadis27 it comes up with the error given in the first email...
<br>
<p><p>Best,
<br>
Bernhard
<br>
<p><p><p><p><p>-------- original message --------
<br>
<p>*Subject:* Re: [OMPI users] hostname not known only in fedora 15
<br>
*From:* Jeffrey Squyres (/jsquyres_at_[hidden]/)
<br>
*Date:* 2012-04-19 09:21:35
<br>
<p>What happens if you &quot;dig quoVadis27&quot;?
<br>
<p>If you don't get a valid answer back, then it's not a resolvable name.
<br>
<p><p>On Apr 19, 2012, at 6:42 AM, Bernhard Knapp wrote:
<br>
<p><span class="quotelev1">&gt;  Dear mail-list users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have a problem when I try to run a parallel gromacs job on fedora core 15. The same job (same installation options and network-setup) for fedora core 13 works fine. I already tried it in a fedora forum but I could not find a solution there ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [terminal output start]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [name_at_quoVadis27 folder]$ mpirun -np 4 mdrun [...] : Could not resolve hostname quoVadis27: Name or service not known
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  A daemon (pid 9722) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev1">&gt;  to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt;  libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt;  location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt;  automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;  that caused that situation.
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [terminal output end]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  It claims that &quot;quoVadis27&quot; is not known however this is just the name of the maschine itself:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [terminal output start]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [name_at_quoVadis27 ~]$ hostname
</span><br>
<span class="quotelev1">&gt;  quoVadis27
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [name_at_quoVadis27 ~]$ cat /etc/resolv.conf
</span><br>
<span class="quotelev1">&gt;  # Generated by NetworkManager
</span><br>
<span class="quotelev1">&gt;  nameserver 192.168.0.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [name_at_quoVadis27 ~]$ cat /etc/hosts
</span><br>
<span class="quotelev1">&gt;  127.0.0.1 localhost.localdomain localhost
</span><br>
<span class="quotelev1">&gt;  ::1 localhost6.localdomain6 localhost6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [terminal output end]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Also the LD_LIBRARY_PATH is set in the bash.rc: export LD_LIBRARY_PATH=&quot;/usr/local/lib&quot; .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Any ideas how to solve this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  best,
</span><br>
<span class="quotelev1">&gt;  Bernhard
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19055/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19056.php">George Bosilca: "Re: [OMPI users] send/recv implementation details"</a>
<li><strong>Previous message:</strong> <a href="19054.php">Jeffrey Squyres: "Re: [OMPI users] hostname not known only in fedora 15"</a>
<li><strong>Maybe in reply to:</strong> <a href="19048.php">Bernhard Knapp: "[OMPI users] hostname not known only in fedora 15"</a>
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
