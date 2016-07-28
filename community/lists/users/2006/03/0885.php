<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar 19 07:10:37 2006" -->
<!-- isoreceived="20060319121037" -->
<!-- sent="Sun, 19 Mar 2006 13:10:04 +0100" -->
<!-- isosent="20060319121004" -->
<!-- name="Frank" -->
<!-- email="openmpi-user_at_[hidden]" -->
<!-- subject="[OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1" -->
<!-- id="441D4A1C.1090900_at_fraka-mp.de" -->
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
<strong>From:</strong> Frank (<em>openmpi-user_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-19 07:10:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0886.php">Frank: "Re: [OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0884.php">Brian Barrett: "Re: [OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
<p>that's all I get when submitting the job with the -d option to mpirun:
<br>
<p>[powerbook:00682] procdir: (null)
<br>
[powerbook:00682] jobdir: (null)
<br>
[powerbook:00682] unidir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook_0/default-universe
<br>
[powerbook:00682] top: openmpi-sessions-admin_at_powerbook_0
<br>
[powerbook:00682] tmp: /tmp
<br>
[powerbook:00682] connect_uni: contact info read
<br>
[powerbook:00682] connect_uni: connection not allowed
<br>
[powerbook:00682] [0,0,0] setting up session dir with
<br>
[powerbook:00682]       tmpdir /tmp
<br>
[powerbook:00682]       universe default-universe-682
<br>
[powerbook:00682]       user admin
<br>
[powerbook:00682]       host powerbook
<br>
[powerbook:00682]       jobid 0
<br>
[powerbook:00682]       procid 0
<br>
[powerbook:00682] procdir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook_0/default-universe-682/0/0
<br>
[powerbook:00682] jobdir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook_0/default-universe-682/0
<br>
[powerbook:00682] unidir: 
<br>
/tmp/openmpi-sessions-admin_at_powerbook_0/default-universe-682
<br>
[powerbook:00682] top: openmpi-sessions-admin_at_powerbook_0
<br>
[powerbook:00682] tmp: /tmp
<br>
[powerbook:00682] [0,0,0] contact_file 
<br>
/tmp/openmpi-sessions-admin_at_powerbook_0/default-universe-682/universe-setup.txt
<br>
[powerbook:00682] [0,0,0] wrote setup file
<br>
[powerbook:00682] spawn: in job_state_callback(jobid = 1, state = 0x1)
<br>
[g4d003.local:19326] [0,1,26] setting up session dir with
<br>
[g4d003.local:19327] [0,1,33] setting up session dir with
<br>
[g4d003.local:19326]    universe default-universe
<br>
[g4d003.local:19327]    universe default-universe
<br>
[powerbook:00690] [0,1,17] setting up session dir with
<br>
[g4d003.local:19326]    user nobody
<br>
[g4d003.local:19327]    user nobody
<br>
[powerbook:00690]       universe default-universe
<br>
[g4d003.local:19326]    host xgrid-node-26
<br>
[g4d003.local:19327]    host xgrid-node-33
<br>
[powerbook:00690]       user nobody
<br>
[g4d003.local:19326]    jobid 1
<br>
[g4d003.local:19327]    jobid 1
<br>
[powerbook:00690]       host xgrid-node-17
<br>
[ibook-g4:14666] [0,1,7] setting up session dir with
<br>
[g4d003.local:19326]    procid 26
<br>
[g4d003.local:19327]    procid 33
<br>
[powerbook:00690]       jobid 1
<br>
[ibook-g4:14666]        universe default-universe
<br>
[g4d003.local:19326] procdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-26_0/default-universe/1/26
<br>
[g4d003.local:19327] procdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-33_0/default-universe/1/33
<br>
[powerbook:00690]       procid 17
<br>
[ibook-g4:14666]        user nobody
<br>
[g4d003.local:19326] jobdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-26_0/default-universe/1
<br>
[g4d003.local:19327] jobdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-33_0/default-universe/1
<br>
[powerbook:00690] procdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-17_0/default-universe/1/17
<br>
[ibook-g4:14666]        host xgrid-node-7
<br>
[g4d003.local:19326] unidir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-26_0/default-universe
<br>
[g4d003.local:19327] unidir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-33_0/default-universe
<br>
[powerbook:00690] jobdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-17_0/default-universe/1
<br>
[ibook-g4:14666]        jobid 1
<br>
[g4d003.local:19326] top: openmpi-sessions-nobody_at_xgrid-node-26_0
<br>
[g4d003.local:19327] top: openmpi-sessions-nobody_at_xgrid-node-33_0
<br>
[powerbook:00690] unidir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-17_0/default-universe
<br>
[ibook-g4:14666]        procid 7
<br>
[g4d003.local:19326] tmp: /tmp
<br>
[g4d003.local:19327] tmp: /tmp
<br>
[powerbook:00690] top: openmpi-sessions-nobody_at_xgrid-node-17_0
<br>
[ibook-g4:14666] procdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-7_0/default-universe/1/7
<br>
[powerbook:00690] tmp: /tmp
<br>
[ibook-g4:14666] jobdir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-7_0/default-universe/1
<br>
[ibook-g4:14666] unidir: 
<br>
/tmp/openmpi-sessions-nobody_at_xgrid-node-7_0/default-universe
<br>
[ibook-g4:14666] top: openmpi-sessions-nobody_at_xgrid-node-7_0
<br>
[ibook-g4:14666] tmp: /tmp
<br>
<p>Does this is of any help to you?
<br>
<p>Thanks,
<br>
Frank
<br>
<p>On Mar 18, 2006, at 5:40 AM, Frank wrote:
<br>
<p><span class="quotelev1"> &gt; XGRID_CONTROLLER_HOSTNAME and XGRID_CONTROLLER_PASSWORD are
</span><br>
<span class="quotelev1"> &gt; properly set
</span><br>
<span class="quotelev1"> &gt; up, Open-MPI 1.0.1 is installed on all machines (with the same
</span><br>
<span class="quotelev1"> &gt; configure
</span><br>
<span class="quotelev1"> &gt; options). When configured with --prefix=/usr/local/openmpi my app is
</span><br>
<span class="quotelev1"> &gt; supplied to the xgrid controller and I can see that copy's of my
</span><br>
<span class="quotelev1"> &gt; app are
</span><br>
<span class="quotelev1"> &gt; &quot;supplied&quot; to the other machines, too - but the jobs hang, nothing
</span><br>
<span class="quotelev1"> &gt; happens (user nobody has full access to the folder /usr/local/myapp
</span><br>
<span class="quotelev1"> &gt; where my app is run). /usr/local/openmpi/bin and /usr/local/openmpi/
</span><br>
<span class="quotelev1"> &gt; lib
</span><br>
<span class="quotelev1"> &gt; are added to the variables PATH and DYLD_LIBRARY_PATH on every
</span><br>
<span class="quotelev1"> &gt; machine,
</span><br>
<span class="quotelev1"> &gt; too. I'm running into this situation no matter from which machine
</span><br>
<span class="quotelev1"> &gt; my app
</span><br>
<span class="quotelev1"> &gt; ist started. To the guys with openmpi and xgrid performing correct:
</span><br>
<span class="quotelev1"> &gt; which configure options did you use? The firewall is told not block
</span><br>
<span class="quotelev1"> &gt; any
</span><br>
<span class="quotelev1"> &gt; internal traffic on the subnet. When not using the xgrid my app
</span><br>
<span class="quotelev1"> &gt; performs
</span><br>
<span class="quotelev1"> &gt; correct.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; Has anyone any idea concerning this matter?
</span><br>
<p>My first guess was going to be the firewall issue, but if you can run
<br>
without XGrid, that probably isn't the case. Could you try an XGrid
<br>
run with the -d option to mpirun? That will enable some debugging
<br>
output that should help determine what is going wrong.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0886.php">Frank: "Re: [OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0884.php">Brian Barrett: "Re: [OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
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
