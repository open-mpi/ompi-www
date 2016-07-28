<?
$subject_val = "Re: [OMPI users] Open MPI via SSH noob issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 11 02:12:49 2011" -->
<!-- isoreceived="20110811061249" -->
<!-- sent="Thu, 11 Aug 2011 08:12:11 +0200" -->
<!-- isosent="20110811061211" -->
<!-- name="Christopher Jones" -->
<!-- email="Chris.Jones_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI via SSH noob issue" -->
<!-- id="3D78AEFC-9A05-42B5-9AC0-02583B0224C4_at_mikrob.slu.se" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.6806.1312981850.11166.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI via SSH noob issue<br>
<strong>From:</strong> Christopher Jones (<em>Chris.Jones_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-11 02:12:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17051.php">Jeff Squyres: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>Previous message:</strong> <a href="17049.php">Ralph Castain: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<li><strong>Maybe in reply to:</strong> <a href="17029.php">Christopher Jones: "[OMPI users] Open MPI via SSH noob issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17051.php">Jeff Squyres: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>Reply:</strong> <a href="17051.php">Jeff Squyres: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>Ok - I see what I missed in the FAQ, sorry about that....my understanding of the shell is a bit minimal to say the least. I now have my .bashrc files configured as such on both computers:
<br>
<p>export LD_LIBRARY_PATH=/opt/local/openmpi/lib:{$PATH}
<br>
export PATH=/opt/local/openmpi/bin:{$PATH}
<br>
<p>However, I am now running into a new issue that is still cryptic to me:
<br>
<p>quadcore:~ chrisjones$ /opt/local/openmpi/bin/mpirun -np 8 -hostfile hostfile ./ring_c
<br>
Process 0 sending 10 to 1, tag 201 (8 processes in ring)
<br>
[quadcore.mikrob.slu.se][[53435,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 127.0.0.1 failed: Connection refused (61)
<br>
<p>This may be superfluous, but I can connect to the localhost (ssh localhost) with no password prompt...Is there an ssh port I need to change somewhere?
<br>
<p>Again, thanks for your patience and help.
<br>
<p>Chris
<br>
<p><p>Have you setup your shell startup files such that they point to the new OMPI installation (/opt/local/openmpi/) even for non-interactive logins?
<br>
<p><p>Hi,
<br>
<p>Thanks for the quick response.....I managed to compile 1.5.3 on both computers using gcc-4.2, with the proper flags set (this took a bit of playing with, but I did eventually get it to compile). Once that was done, I installed it to a different directory from 1.2.8 (/opt/local/openmpi/), specified the PATH and LD_LIBRARY_PATH for the new version on each computer, then managed to get the hello_world script to run again so it could call each process, like before. However, I'm still in the same place - ring_c freezes up. I tried changing the hostname in the host file (just for poops and giggles - I see the response stating it doesn't matter), but to no avail. I made sure the firewall is off on both computers.
<br>
<p>I'm hoping I'm not doing something overly dumb here, but I'm still a bit stuck...I see in the FAQ that there were some issues with nehalem processors - I have two Xeons in one box and a nehalem in another. Could this make any difference?
<br>
<p>Thanks again,
<br>
Chris
<br>
<p>On Aug 9, 2011, at 6:50 PM, Jeff Squyres wrote:
<br>
<p>No, Open MPI doesn't use the names in the hostfile to figure out which TCP/IP addresses to use (for example).  Each process ends up publishing a list of IP addresses at which it can be connected, and OMPI does routability computations to figure out which is the &quot;best&quot; address to contact a given peer on.
<br>
<p>If you're just starting with Open MPI, can you upgrade?  1.2.8 is pretty ancient.  Open MPI 1.4.3 is the most recent stable release; 1.5.3 is our &quot;feature&quot; series, but it's also relatively stable (new releases are coming in both the 1.4.x and 1.5.x series soon, FWIW).
<br>
<p><p>On Aug 9, 2011, at 12:14 PM, David Warren wrote:
<br>
<p>I don't know if this is it, but if you use the name localhost, won't processes on both machines try to talk to 127.0.0.1? I believe you need to use the real hostname in you host file. I think that your two tests work because there is no interprocess communication, just stdout.
<br>
<p>On 08/08/11 23:46, Christopher Jones wrote:
<br>
Hi again,
<br>
<p>I changed the subject of my previous posting to reflect a new problem encountered when I changed my strategy to using SSH instead of Xgrid on two mac pros. I've set up a login-less ssh communication between the two macs (connected via direct ethernet, both running openmpi 1.2.8 on OSX 10.6.8) per the instructions on the FAQ. I can type in 'ssh computer-name.local' on either computer and connect without a password prompt. From what I can see, the ssh-agent is up and running - the following is listed in my ENV:
<br>
<p>SSH_AUTH_SOCK=/tmp/launch-5FoCc1/Listeners
<br>
SSH_AGENT_PID=61058
<br>
<p>My host file simply lists 'localhost' and 'chrisjones2_at_allana-welshs-mac-pro.local&lt;mailto:'chrisjones2_at_allana-welshs-mac-pro.local&gt;'. When I run a simple hello_world test, I get what seems like a reasonable output:
<br>
<p>chris-joness-mac-pro:~ chrisjones$ mpirun -np 8 -hostfile hostfile ./test_hello
<br>
Hello world from process 0 of 8
<br>
Hello world from process 1 of 8
<br>
Hello world from process 2 of 8
<br>
Hello world from process 3 of 8
<br>
Hello world from process 4 of 8
<br>
Hello world from process 7 of 8
<br>
Hello world from process 5 of 8
<br>
Hello world from process 6 of 8
<br>
<p>I can also run hostname and get what seems to be an ok response (unless I'm wrong about this):
<br>
<p>chris-joness-mac-pro:~ chrisjones$ mpirun -np 8 -hostfile hostfile hostname
<br>
allana-welshs-mac-pro.local
<br>
allana-welshs-mac-pro.local
<br>
allana-welshs-mac-pro.local
<br>
allana-welshs-mac-pro.local
<br>
quadcore.mikrob.slu.se&lt;<a href="http://quadcore.mikrob.slu.se">http://quadcore.mikrob.slu.se</a>&gt;
<br>
quadcore.mikrob.slu.se&lt;<a href="http://quadcore.mikrob.slu.se">http://quadcore.mikrob.slu.se</a>&gt;
<br>
quadcore.mikrob.slu.se&lt;<a href="http://quadcore.mikrob.slu.se">http://quadcore.mikrob.slu.se</a>&gt;
<br>
quadcore.mikrob.slu.se&lt;<a href="http://quadcore.mikrob.slu.se">http://quadcore.mikrob.slu.se</a>&gt;
<br>
<p><p>However, when I run the ring_c test, it freezes:
<br>
<p>chris-joness-mac-pro:~ chrisjones$ mpirun -np 8 -hostfile hostfile ./ring_c
<br>
Process 0 sending 10 to 1, tag 201 (8 processes in ring)
<br>
Process 0 sent to 1
<br>
Process 0 decremented value: 9
<br>
<p>(I noted that processors on both computers are active).
<br>
<p>ring_c was compiled separately on each computer, however both have the same version of openmpi and OSX. I've gone through the FAQ and searched the user forum, but I can't quite seems to get this problem unstuck.
<br>
<p>Many thanks for your time,
<br>
Chris
<br>
<p>On Aug 5, 2011, at 6:00 PM,&lt;users-request_at_[hidden]&lt;mailto:users-request_at_[hidden]&gt;&gt;  &lt;users-request_at_[hidden]&lt;mailto:users-request_at_[hidden]&gt;&gt;  wrote:
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17050/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17051.php">Jeff Squyres: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>Previous message:</strong> <a href="17049.php">Ralph Castain: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<li><strong>Maybe in reply to:</strong> <a href="17029.php">Christopher Jones: "[OMPI users] Open MPI via SSH noob issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17051.php">Jeff Squyres: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>Reply:</strong> <a href="17051.php">Jeff Squyres: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
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
