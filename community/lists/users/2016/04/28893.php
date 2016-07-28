<?
$subject_val = "Re: [OMPI users] Question on MPI_Comm_spawn timing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 14:37:19 2016" -->
<!-- isoreceived="20160405183719" -->
<!-- sent="Tue, 5 Apr 2016 18:37:16 +0000" -->
<!-- isosent="20160405183716" -->
<!-- name="Emani, Murali" -->
<!-- email="emani1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on MPI_Comm_spawn timing" -->
<!-- id="D32953C0.1FAB%emani1_at_llnl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5535A1EF-9C86-442A-A616-F813E16CC3BF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on MPI_Comm_spawn timing<br>
<strong>From:</strong> Emani, Murali (<em>emani1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-05 14:37:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28894.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Previous message:</strong> <a href="28892.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28873.php">Ralph Castain: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph and Gilles.
<br>

<br>
Thanks,
<br>
Murali
<br>

<br>

<br>

<br>
From: users &lt;users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;
<br>
Reply-To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Date: Sunday, April 3, 2016 at 6:41 AM
<br>
To: Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Subject: Re: [OMPI users] Question on MPI_Comm_spawn timing
<br>

<br>
I honestly don&#226;&#128;&#153;t think anyone has been concerned about the speed of MPI_Comm_spawn, and so there hasn&#226;&#128;&#153;t been any effort made to optimize it
<br>

<br>

<br>
On Apr 3, 2016, at 2:52 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
<br>

<br>
Hi,
<br>

<br>
performance of MPI_Comm_spawn in the v1.8/v1.10 series is known to be poor, especially compared to v1.6
<br>

<br>
generally speaking, I cannot recommend v1.6 since it is no more maintained.
<br>
that being said, if performance is critical, you might want to give it a try.
<br>

<br>
I did not run any performance measurement with master, especially since we moved to PMIx,
<br>
that might be worth a try too
<br>

<br>
Cheers,
<br>

<br>
Gilles
<br>

<br>
On Sunday, April 3, 2016, Emani, Murali &lt;emani1_at_[hidden]&lt;mailto:emani1_at_[hidden]&gt;&gt; wrote:
<br>
Hi all,
<br>

<br>
I am trying to evaluate the time taken for MPI_Comm_spawn operation in the
<br>
latest version of OpenMPI. Here a parent communicator (all processes, not
<br>
just the root) spawns one new child process (separate executable). The
<br>
code I&#194;&#185;m executing is
<br>

<br>
main(){
<br>
{
<br>
&#197;&#160;..
<br>
// MPI initialization
<br>
&#197;&#160;..
<br>
start1 = MPI_Wtime();
<br>
MPI_Comm_spawn(&#194;&#179;./child&quot;, MPI_ARGV_NULL,1, MPI_INFO_NULL, 0,
<br>
MPI_COMM_WORLD, &amp;inter_communicator, MPI_ERRCODES_IGNORE );
<br>
End = MPI_Wtime();
<br>

<br>
printf(&#194;&#179; spawn time: %f&#194;&#178;, (end-start));
<br>
MPI_Barrier(inter_communicator); // spawn is collective, but still want to
<br>
ensure it using a barrier
<br>
..
<br>
..
<br>
// MPI finalize
<br>
}
<br>

<br>

<br>
In child.c
<br>
main(){
<br>
{
<br>
&#197;&#160;..
<br>
// MPI initialization
<br>
&#197;&#160;..
<br>

<br>
MPI_Comm_get_parent(&amp;parentcomm); // gets the inter-communicator
<br>
MPI_Barrier(parentcomm);
<br>
..
<br>
..
<br>
// MPI finalize
<br>
}
<br>

<br>
My observation is that the spawn time is very high (almost 80% of the
<br>
total program execution time). It increases exponentially with the number
<br>
of processes in the parent communicator. Is this method correct, and is
<br>
the MPI_Comm_spawn operation expensive.
<br>
I have also tried MPI_Comm_spawn_multiple but it still measures the same
<br>
time.
<br>

<br>
Could kindly someone guide me in this issue.
<br>

<br>
Thanks,
<br>
Murali
<br>

<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;javascript:;&gt;
<br>
Subscription: <a href="http://secure-web.cisco.com/1z0v_U78rf_0ofSUeyHRS36Fj-mk74BguweaGfG7pX9MxfOcN1eiC_hUDhW9vqTMtTPbrFNAMQHqAtrLtbFTpAjduzGF-kqmEYhcbTlFzHJ1zzF6H0czF7KD40VyYqVvjMk3GhonQ4c-TX7IpOmyqwdsds5OIz01wDIsfGBVxLqsYKCDNsS2ulGqDi3aoOT2VIeTn1yYAOAzLdVkdqP4cnPbmpreqJwAdREmXahmto">http://secure-web.cisco.com/1z0v_U78rf_0ofSUeyHRS36Fj-mk74BguweaGfG7pX9MxfOcN1eiC_hUDhW9vqTMtTPbrFNAMQHqAtrLtbFTpAjduzGF-kqmEYhcbTlFzHJ1zzF6H0czF7KD40VyYqVvjMk3GhonQ4c-TX7IpOmyqwdsds5OIz01wDIsfGBVxLqsYKCDNsS2ulGqDi3aoOT2VIeTn1yYAOAzLdVkdqP4cnPbmpreqJwAdREmXahmto</a>D5lAQV2FJXI6Fzm1Hdk0lpO6gHzDuQ7aAUW4jlUuTczHpYKKg9t_JpfzcF-WWZgKGPvB-9YhFQL-SPHw6iWqpCFho36EeumgHWN3oRw-nOHp1QZEh6fPaMb3_yaeErV3Gc/http%3A%2F%2Fwww.open-mpi.org%2Fmailman%2Flistinfo.cgi%2Fusers
<br>
Link to this post: <a href="http://secure-web.cisco.com/13MtbvneBMZbxflPfKcY3Ej3Lqiwgo-u3nP2qeSvXFzeJ5lrH_QoikbeMEiFrL1D2BGSXO2U7qcdCyzPyKzhCWHiYm4O92e3jpXTu4lX2cEAQUo-o8DSsAhMi_UQeIKIYLIkTvELf3WM-qqo7oK2VU6uvtyrJO6WpJ_0OW-Nupk-V4sRGUb3WXFTT2Bq9GnU6NtjpNql2If90LZkTsaBAlsoxVx-4oNdLmiOuHIyIb">http://secure-web.cisco.com/13MtbvneBMZbxflPfKcY3Ej3Lqiwgo-u3nP2qeSvXFzeJ5lrH_QoikbeMEiFrL1D2BGSXO2U7qcdCyzPyKzhCWHiYm4O92e3jpXTu4lX2cEAQUo-o8DSsAhMi_UQeIKIYLIkTvELf3WM-qqo7oK2VU6uvtyrJO6WpJ_0OW-Nupk-V4sRGUb3WXFTT2Bq9GnU6NtjpNql2If90LZkTsaBAlsoxVx-4oNdLmiOuHIyIb</a>5xvRx-FRvSL8Pr8ZHNmUYMSqdx-tU2PgMFbjivrVbXcjPfDkYCvcyOz9i3BSCxRfJwSdeDu1sRwfkk8Jf6kEcrNiIGO5EXzUo1xQyjNJyCd73gR3bGcqT-i_uwyn_Iw2_I/http%3A%2F%2Fwww.open-mpi.org%2Fcommunity%2Flists%2Fusers%2F2016%2F04%2F28871.php
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://secure-web.cisco.com/1z0v_U78rf_0ofSUeyHRS36Fj-mk74BguweaGfG7pX9MxfOcN1eiC_hUDhW9vqTMtTPbrFNAMQHqAtrLtbFTpAjduzGF-kqmEYhcbTlFzHJ1zzF6H0czF7KD40VyYqVvjMk3GhonQ4c-TX7IpOmyqwdsds5OIz01wDIsfGBVxLqsYKCDNsS2ulGqDi3aoOT2VIeTn1yYAOAzLdVkdqP4cnPbmpreqJwAdREmXahmto">http://secure-web.cisco.com/1z0v_U78rf_0ofSUeyHRS36Fj-mk74BguweaGfG7pX9MxfOcN1eiC_hUDhW9vqTMtTPbrFNAMQHqAtrLtbFTpAjduzGF-kqmEYhcbTlFzHJ1zzF6H0czF7KD40VyYqVvjMk3GhonQ4c-TX7IpOmyqwdsds5OIz01wDIsfGBVxLqsYKCDNsS2ulGqDi3aoOT2VIeTn1yYAOAzLdVkdqP4cnPbmpreqJwAdREmXahmto</a>D5lAQV2FJXI6Fzm1Hdk0lpO6gHzDuQ7aAUW4jlUuTczHpYKKg9t_JpfzcF-WWZgKGPvB-9YhFQL-SPHw6iWqpCFho36EeumgHWN3oRw-nOHp1QZEh6fPaMb3_yaeErV3Gc/http%3A%2F%2Fwww.open-mpi.org%2Fmailman%2Flistinfo.cgi%2Fusers
<br>
Link to this post: <a href="http://secure-web.cisco.com/1Iw8n_xjvr1cInNKbFh8730whotP6hbxpFj-u8Z0n_SmcsfaJHY42pPRsNDcvV-fXHjHoyf0UW5vW43x5-724wT6QS5GGEI7zNGcj24W6TfyzVRhhEFfFoFuODUG3HsLB19QyiUx96e3pN62suKOegK-BpnRSinst01viAL5bcJg2YHvuhlSlXaxO6eYx1RQf0GMFihZV_5OWT-GpaRpGW3YoSQZT94z7yWpL92D3b">http://secure-web.cisco.com/1Iw8n_xjvr1cInNKbFh8730whotP6hbxpFj-u8Z0n_SmcsfaJHY42pPRsNDcvV-fXHjHoyf0UW5vW43x5-724wT6QS5GGEI7zNGcj24W6TfyzVRhhEFfFoFuODUG3HsLB19QyiUx96e3pN62suKOegK-BpnRSinst01viAL5bcJg2YHvuhlSlXaxO6eYx1RQf0GMFihZV_5OWT-GpaRpGW3YoSQZT94z7yWpL92D3b</a>xesZdBWCGgy-uxuXePTekRfFwTZPGi26vu-9kMvABX8OOVzZlhJb8PA4E3urjAVDvJ9Uwclk2m1aM0EQRuqnT2QaXY6FTxMMO0jTcyLQKSoURrJRhH_cnxuOMyo_YrqSUY/http%3A%2F%2Fwww.open-mpi.org%2Fcommunity%2Flists%2Fusers%2F2016%2F04%2F28872.php
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28893/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28894.php">dpchoudh .: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Previous message:</strong> <a href="28892.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28873.php">Ralph Castain: "Re: [OMPI users] Question on MPI_Comm_spawn timing"</a>
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
