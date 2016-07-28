<?
$subject_val = "Re: [OMPI users] cluster with iOS or Android devices?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 30 19:34:58 2012" -->
<!-- isoreceived="20121201003458" -->
<!-- sent="Fri, 30 Nov 2012 16:34:46 -0800" -->
<!-- isosent="20121201003446" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cluster with iOS or Android devices?" -->
<!-- id="5CD85267-BA2F-4BEF-A172-248FAFB77FF3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FCE0FF7E-4E75-4601-AE6E-D3036267FCD5_at_me.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] cluster with iOS or Android devices?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-30 19:34:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20836.php">Jaroslaw Slawinski: "[OMPI users] vtrun/otf question"</a>
<li><strong>Previous message:</strong> <a href="20834.php">Joseph Farran: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>In reply to:</strong> <a href="20833.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20832.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The connection on/off the iPad looks like an Ethernet port, I believe - but you should check that. Alternatively, you can send/recv across the wifi connection. No idea of the relative speeds, but you should be able to google that data.
<br>
<p>On Nov 30, 2012, at 3:35 PM, shiny knight &lt;theshinyknight_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I totally get your point Jeff, and thanks for pointing it out...this is an aspect that I didn't consider yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Power should not be an issue, since the devices are plugged in. Now I need to evaluate exactly how much power I can pull while the device is connected to the computer, compared to the power needed to run a process at 100% CPU load. Running over batteries is absolutely out of question I guess; my calculations should go on for at least a couple of hours, so I doubt that I can run a small device with batteries and accomplish my objectives.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any info about how the I/O on the iPad and iPhone works? So I can have an idea about what I can run on that cable and for how long. As you pointed out, the main issue will be syncing processes...wifi may be feasible but would be slower I guess (without specs is hard to even make assumptions).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No worries, you are talking about things that has to be evaluated; I am just exploring an alternate use of old hardware; which may result in not being convenient at all in the end. So any comments helps :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will focus on calculating what you suggested. Theoretically the dual core Apple processors should be powerful enough to give some sort of performance boost, but I am new to ARM so I don't really know too much about their structure and pipeline, so I may be totally wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -lou
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 30, 2012, at 7:35 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not to throw cold water on this, but I think the canonical problem cited with doing distributed computations on mobile devices is the power requirement.  Meaning: if the devices are running on battery, you're really not going to get much computation out of them.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And if you have them plugged in, you have a potential IO issue (i.e., how to get the input onto the device and the output out of the device).  You probably only have 802.11g (maybe 802.11n?) wifi available, and you might have to deal with a LOT of I/O.  Meaning: you might need to restrict this work to applications that are compute-heavy but IO-light.  But then again, you're dealing with small, &quot;slow&quot; processors, so compute-heavy problems on such processors might not do so well.  Or, more precisely, you might get much more compute efficiency with traditional &quot;big&quot; HPC servers.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Don't get me wrong; I'm not trying to say this is a bad idea.  I'm just saying that it's worth doing some back-of-the-envelope calculations before you spend a lot of effort on porting code to mobile platforms.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For example, here's some interesting data points that would be good to calculate:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. How many (pick your favorite mobile device; say -- iPhone 5) would it take to equal the power of one cheap Intel Sandy Bridge-based server with 16 cores?  Compare things like max sustained FLOPS and IOPS (integer ops, not IO ops), RAM sizes, etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. What's the procurement cost differential between 1 Intel Sandy Bridge-based server and N iPhone 5s?  What's the operational cost differential?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 30, 2012, at 10:25 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just an FYI: xgrid is no longer being distributed or supported.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd start by first building OMPI against the iOS simulator in Xcode. You may run into some issues with the atomics that will need addressing, and there may be other issues with syntax and header file locations. Best to resolve those first.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Once you get that to build, you can test running several procs on a single iPad. If you have older iPads, I'm not sure that will work as they don't multi-task. But might be worth a try.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You'll then need to find a way to launch the processes across iPads. I don't know if ssh will work, so you may have to devise a new plm module. I can advise as you go.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW: I have an iPad 1 and iOS development kit, so I can potentially help with problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 29, 2012, at 10:16 PM, shiny knight &lt;theshinyknight_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for all your replies.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As now I have access to 3 iOS devices and 1 Android, so if possible I would be oriented to pursue more the iOS route.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So it seems that there is not yet a simple way to do so on these devices (Thanks for the paper posted Dominik); I will have to look deeper in that project that you mentioned and wait for some official release (at least for the Android side)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I may install linux distro on a virtual machine; mostly I work on OSX so it should not be that bad (OSX allows me to work with both Android and iOS hassle free; that's why I had the thought to use my devices for MPI).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Beatty: My idea is to use the devices only when plugged in; I was reading a paper about how to use MPI and dynamically change the number of nodes attached, while crunching data for a process. So it would be possible to add and remove nodes on the fly, and was trying to apply it to a portable device (<a href="http://www.cs.rpi.edu/~szymansk/papers/ppam05.pdf">http://www.cs.rpi.edu/~szymansk/papers/ppam05.pdf</a>) before realizing that there is no MPI implementation for them.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would never envision a system where a user has a device in his pocket that is actually doing &quot;something&quot; behind is back...mine was a simple issue with having devices sitting on my desk, which I use to test my apps, and I could use these devices in a more productive way, while I have them tethered to my main machine (which is the main server where MPI development is done).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Would you mind elaborate on the approach that you mentioned? I never used Xgrid, so I am not sure about how your solution would work.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lou
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 29, 2012, at 4:14 PM, Beatty, Daniel D CIV NAVAIR, 474300D wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings Ladies and gentlemen,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There is one alternative approach and this a psuedo-cloud based MPI.  The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; idea is that MPI node list is adjusted via the cloud similar to the way
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Xgrid's Bonjour used to do it for Xgrid.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In this case, it is applying an MPI notion to the OpenCL codelets.  There
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are obvious issues with security, battery life, etc.  There is considerable
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; room for discussion as far expectations.  Do jobs run free if the device is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; plugged in?  If the device in the pocket, can the user switch to power
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; conservation/ cooler pockets?  What constitutes fairness?  Do owners have a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; right to be biased in judgement?   These are tough questions that I think I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; will have to provide fair assurances for.  After all, everyone likes to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; think they are control of what they put in their pocket.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; V/R,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 11/28/12 3:06 PM, &quot;Dominik Goeddeke&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;dominik.goeddeke_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; shameless plug: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.mathematik.tu-dortmund.de/~goeddeke/pubs/pdf/Goeddeke_2012_EEV.pdf">http://www.mathematik.tu-dortmund.de/~goeddeke/pubs/pdf/Goeddeke_2012_EEV.pdf</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; In the MontBlanc project (www.montblanc-project.eu), a lot of folks from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; all around Europe look into exactly this. Together with a few
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; colleagues, we have been honoured to get access to an early prototype
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; system. The runs for the paper above (accepted in JCP as of last week)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; have been carried out with MPICH2 back in June, but OpenMPI also worked
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; flawlessly except for some issues with SLURM integration at the time we
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; did those tests.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The bottom line is: The prototype machine (128 Tegra2's) ran standard
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ubuntu, and since Android is essentially Linux, it should not be tooooo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hard to get the system you envision up and running, Shiny Knight.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Dominik
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 11/29/2012 12:00 AM, Vincent Diepeveen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; You might want to post in beowulf mailing list see cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and you want to install linux of course.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; OpenFabrics releases openmpi, yet it only works at a limited number of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; distributions - most important is having
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the correct kernel (usually old kernel).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm gonna try get it to work at debian soon.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 28, 2012, at 11:50 PM, shiny knight wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I was looking for some info about MPI port on iOS or Android devices.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have some old devices that may result useful, if I could be able to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; include them in my computation scheme.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OpenCL runs on iOS and Android, so I was wondering if there is any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; way to have an old iPhone/phone or iPad/tablet to run MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tried to look everywhere, but I didn't find anything that says that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it is possible, nor I've found any practical example.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/20836.php">Jaroslaw Slawinski: "[OMPI users] vtrun/otf question"</a>
<li><strong>Previous message:</strong> <a href="20834.php">Joseph Farran: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>In reply to:</strong> <a href="20833.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20832.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
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
