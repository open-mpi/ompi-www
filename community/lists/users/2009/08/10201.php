<?
$subject_val = "[OMPI users] Kerberos ticket forwarding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 17:15:46 2009" -->
<!-- isoreceived="20090804211546" -->
<!-- sent="Tue, 04 Aug 2009 17:15:40 -0400" -->
<!-- isosent="20090804211540" -->
<!-- name="Jean-Christophe Ducom" -->
<!-- email="jc_ducom_at_[hidden]" -->
<!-- subject="[OMPI users] Kerberos ticket forwarding" -->
<!-- id="4A78A4FC.7010007_at_nd.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Kerberos ticket forwarding<br>
<strong>From:</strong> Jean-Christophe Ducom (<em>jc_ducom_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-04 17:15:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10202.php">Torgny Faxen: "[OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Previous message:</strong> <a href="10200.php">Hoelzlwimmer Andreas - S0810595005: "[OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10225.php">Jeff Squyres: "Re: [OMPI users] Kerberos ticket forwarding"</a>
<li><strong>Reply:</strong> <a href="10225.php">Jeff Squyres: "Re: [OMPI users] Kerberos ticket forwarding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All-
<br>
Openmpi1.3.2 is the current version running on our cluster.
<br>
Our authentication method is Kerberos and /usr/kerberos/bin/rsh is used 
<br>
for transport.
<br>
To forward a Kerberos5 ticket to another node we use regularly &quot;rsh -F&quot;
<br>
dqcneh001$ rsh -F  dqcneh002 klist
<br>
Ticket cache: FILE:/tmp/krb5cc_p3008
<br>
Default principal: jducom_at_[hidden]
<br>
<p>Valid starting     Expires            Service principal
<br>
08/04/09 17:02:33  09/02/09 22:37:22  krbtgt/CRC.ND.EDU_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;renew until 09/02/09 22:37:22
<br>
08/04/09 17:02:33  09/02/09 22:37:22  afs/crc.nd.edu_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;renew until 09/02/09 22:37:22
<br>
<p><p>Kerberos 4 ticket cache: /tmp/tkt82784
<br>
<p>The logs on dqcneh002 shows the remote connection and the spawn of kshell
<br>
---------
<br>
Aug  4 17:02:33 dqcneh002 xinetd[3095]: START: kshell pid=3008 
<br>
from=10.32.10.68
<br>
Aug  4 17:02:33 dqcneh002 kshd[3008]: Shell process completed.
<br>
Aug  4 17:02:33 dqcneh002 xinetd[3095]: EXIT: kshell status=0 pid=3008 
<br>
duration=0(sec)
<br>
----------
<br>
<p><p>When I try
<br>
dqcneh001$ mpirun -np 1 -H  dqcneh002 -mca plm_rsh_agent 
<br>
&quot;/usr/kerberos/bin/rsh -F&quot;  klist
<br>
klist: No credentials cache found (ticket cache FILE:/tmp/krb5cc_p3651)
<br>
<p><p>Kerberos 4 ticket cache: /tmp/tkt82784
<br>
klist: You have no tickets cached
<br>
<p>The Kerberos ticket is not forwarded.
<br>
<p>The logs on dqcneh002 shows that kshd is sstarted properly though:
<br>
Aug  4 17:13:32 dqcneh002 xinetd[3095]: START: kshell pid=3651 
<br>
from=10.32.10.68
<br>
Aug  4 17:13:32 dqcneh002 kshd[3651]: Shell process completed.
<br>
Aug  4 17:13:32 dqcneh002 xinetd[3095]: EXIT: kshell status=0 pid=3651 
<br>
duration=0(sec)
<br>
<p><p>Am I missing something?
<br>
Thanks for any help
<br>
JC
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10202.php">Torgny Faxen: "[OMPI users] Performance difference on OpenMPI, IntelMPI and ScaliMPI"</a>
<li><strong>Previous message:</strong> <a href="10200.php">Hoelzlwimmer Andreas - S0810595005: "[OMPI users] Bus Error (7) on PS3 running HPL (OpenMPI 1.2.8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10225.php">Jeff Squyres: "Re: [OMPI users] Kerberos ticket forwarding"</a>
<li><strong>Reply:</strong> <a href="10225.php">Jeff Squyres: "Re: [OMPI users] Kerberos ticket forwarding"</a>
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
