<?
$subject_val = "Re: [OMPI users] avoid usage of ssh on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 17 07:04:10 2008" -->
<!-- isoreceived="20081117120410" -->
<!-- sent="Mon, 17 Nov 2008 13:04:03 +0100" -->
<!-- isosent="20081117120403" -->
<!-- name="Sun, Yongqi (E F ES EN 72)" -->
<!-- email="yongqi.sun_at_[hidden]" -->
<!-- subject="Re: [OMPI users] avoid usage of ssh on local machine" -->
<!-- id="EF9AA6DFC03E4D45A3BFE35E162D8AAD6AF106_at_DEERLS7E8A.ww007.siemens.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9b0da5ce0811170149u537c4d56qee4b0d8ab938ca97_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] avoid usage of ssh on local machine<br>
<strong>From:</strong> Sun, Yongqi (E F ES EN 72) (<em>yongqi.sun_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-17 07:04:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7325.php">Jeff Squyres: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Previous message:</strong> <a href="7323.php">jody: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>In reply to:</strong> <a href="7323.php">jody: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7325.php">Jeff Squyres: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Reply:</strong> <a href="7325.php">Jeff Squyres: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>The OMPI is trying to launch 192.168.160.1, which is not in my ifconfig.
<br>
The contents of ifconfig and /etc/hosts are attached.
<br>
What should I do now?
<br>
&nbsp;
<br>
To Jody: The gethostname() is actually called by OMPI routine. I just
<br>
tested it to see whether any error is there. Now it seems that the host
<br>
name is correctly set to my computer name. Thank you for your answer. 
<br>
<p>Best wishes
<br>
<p>Sun
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of jody
<br>
Sent: Montag, 17. November 2008 10:50
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] avoid usage of ssh on local machine
<br>
<p>Hi Sun
<br>
i forgot to add that once you've called gethostname(), you can
<br>
determine the length of the name by using strlen() on your array
<br>
'name'.
<br>
<p>Jody
<br>
<p><p>On Mon, Nov 17, 2008 at 10:45 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Sun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; AFAIK, the second parameter (len) in gethostname is an input
</span><br>
<span class="quotelev1">&gt; parameter, specifying the length of the array your passing
</span><br>
<span class="quotelev1">&gt; as the first parameter. The name of the host will be placed in the
</span><br>
<span class="quotelev1">&gt; array, but it will truncated after len characters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know how to determine the length of the host name, but i think
</span><br>
<span class="quotelev1">&gt; on most systems it must be less than 255.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Nov 17, 2008 at 10:31 AM, Sun, Yongqi (E F ES EN 72)
</span><br>
<span class="quotelev1">&gt; &lt;yongqi.sun_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I still have no clue how to use the local machine by default.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My /etc/hosts file and the result of ifconfig are attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tried gethostname() by myself but an abnormal result generated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My code is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ///////////////////////////////////
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main() {
</span><br>
<span class="quotelev2">&gt;&gt;        char name[20]; // a guess of the array size
</span><br>
<span class="quotelev2">&gt;&gt;        size_t len;
</span><br>
<span class="quotelev2">&gt;&gt;        int res;
</span><br>
<span class="quotelev2">&gt;&gt;        res = gethostname(name, len);
</span><br>
<span class="quotelev2">&gt;&gt;        printf(&quot;res = %d, name = %s, len = %lu&quot;, res, name, len); //
</span><br>
on
<br>
<span class="quotelev2">&gt;&gt; my 64-bit machine, size_t is long unsigned, or?
</span><br>
<span class="quotelev2">&gt;&gt;        return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; /////////////////////////////////
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And the resulting output is:
</span><br>
<span class="quotelev2">&gt;&gt;        &quot;res = 0, name = W71c-140644, len = 140737469359496&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Where len is abnormally large.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sun
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7324/hosts.out">hosts.out</a>
</ul>
<!-- attachment="hosts.out" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7324/ifconfig.out">ifconfig.out</a>
</ul>
<!-- attachment="ifconfig.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7325.php">Jeff Squyres: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Previous message:</strong> <a href="7323.php">jody: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>In reply to:</strong> <a href="7323.php">jody: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7325.php">Jeff Squyres: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Reply:</strong> <a href="7325.php">Jeff Squyres: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
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
